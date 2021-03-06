<?php

namespace App\Http\Controllers\Backend\Auth\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Auth\User\ManageUserRequest;
use App\Http\Requests\Backend\Auth\User\StoreUserRequest;
use App\Http\Requests\Backend\Auth\User\UpdateUserRequest;
use App\Http\Responses\ViewResponse;
use App\Models\Auth\User;
use App\Models\Profile;
use App\Repositories\Backend\Auth\PermissionRepository;
use App\Repositories\Backend\Auth\RoleRepository;
use App\Repositories\Backend\Auth\UserRepository;
use Illuminate\Support\Facades\View;
use App\Imports\ImportUsers;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @var \App\Repositories\Backend\Auth\UserRepository
     */
    protected $userRepository;

    /**
     * @var \App\Repositories\Backend\Auth\RoleRepository
     */
    protected $roleRepository;

    /**
     * @param \App\Repositories\Backend\Auth\UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
        View::share('js', ['users']);
        ini_set('max_execution_time', 600);
    }

    /**
     * @param \App\Http\Requests\Backend\Auth\User\ManageUserRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageUserRequest $request)
    {
        return new ViewResponse('backend.auth.user.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Auth\User\ManageUserRequest $request
     *
     * @return mixed
     */
    public function create(ManageUserRequest $request)
    {
        return view('backend.auth.user.create')
            ->withRoles($this->roleRepository->getAll());
    }

    /**
     * @param \App\Http\Requests\Backend\Auth\User\StoreUserRequest $request
     *
     * @throws \Throwable
     * @return mixed
     */
    public function store(StoreUserRequest $request)
    {
        if(User::where('phone_number','=',$request->phone_number)->count() > 0)
           return redirect(route('admin.auth.users.create'))->withFlashDanger(trans('validation.attributes.backend.access.profiles.user_already_exist'));

        $this->userRepository->create($request->all());

        return redirect()->route('admin.auth.user.index')->withFlashSuccess(__('alerts.backend.access.users.created'));
    }

    /**
     * @param \App\Http\Requests\Backend\Auth\User\ManageUserRequest $request
     * @param \App\Models\Auth\User $user
     *
     * @return mixed
     */
    public function show(ManageUserRequest $request, User $user)
    {
        return view('backend.auth.user.show')
            ->withUser($user);
    }

    /**
     * @param \App\Http\Requests\Backend\Auth\User\ManageUserRequest $request
     * @param \App\Models\Auth\User $user
     *
     * @return mixed
     */
    public function edit(ManageUserRequest $request, User $user, PermissionRepository $permissionRepository)
    {
        return view('backend.auth.user.edit')
            ->withUser($user)
            ->withUserRoles($user->roles->pluck('id')->all())
            ->withRoles($this->roleRepository->getAll())
            ->withPermissions($permissionRepository->getSelectData('display_name'))
            ->withUserPermissions($user->permissions->pluck('id')->all());
    }

    /**
     * @param \App\Http\Requests\Backend\Auth\User\UpdateUserRequest $request
     * @param \App\Models\Auth\User $user
     *
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     * @return mixed
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $this->userRepository->update($user, $request->all());

        return redirect()->route('admin.auth.user.index')->withFlashSuccess(__('alerts.backend.access.users.updated'));
    }

    /**
     * @param \App\Http\Requests\Backend\Auth\User\ManageUserRequest $request
     * @param \App\Models\Auth\User $user
     *
     * @throws \Exception
     * @return mixed
     */
    public function destroy(ManageUserRequest $request, User $user)
    {
        if(Profile::where('patient_id',$user->id)->count() > 0)
           return redirect(route('admin.auth.user.index'))->withFlashDanger(trans('validation.attributes.backend.access.profiles.has_profile'));

        $this->userRepository->delete($user);

        return redirect()->route('admin.auth.user.deleted')->withFlashSuccess(__('alerts.backend.access.users.deleted'));
    }

    public function importClients (ManageUserRequest $request)
    {
        Excel::import(new ImportUsers, request()->file('import_file'));
        return back()->with('success', 'clinets imported successfully.');
    }
}
