<?php

namespace App\Http\Controllers\Backend\Profiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Profiles\CreateProfileRequest;
use App\Http\Requests\Backend\Profiles\DeleteProfileRequest;
use App\Http\Requests\Backend\Profiles\EditProfileRequest;
use App\Http\Requests\Backend\Profiles\StoreProfileRequest;
use App\Http\Requests\Backend\Profiles\UpdateProfileRequest;
use App\Http\Requests\Backend\Profiles\ManageProfileRequest;
use App\Http\Responses\ViewResponse;
use App\Models\Auth\User;
use App\Models\Profile;
use App\Http\Responses\RedirectResponse;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ManageProfileRequest $request)
    {
        return new ViewResponse('backend.profiles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateProfileRequest $request)
    {
        $patients = User::whereHas('roles',function ($q) {
            $q->Patient();
          })->get();
        $genders = ['male','female'];
        return new ViewResponse('backend.profiles.create',compact('patients','genders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileRequest $request)
    {
        $profileData = Profile::CreateFormRequest($request);
        return new RedirectResponse(route('admin.profiles.index'), ['flash_success' => __('alerts.backend.profiles.created')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profileData = Profile::findOrFail($id);
        return view('backend.profiles.show',compact('profileData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EditProfileRequest $request,$id)
    {
        $profile = Profile::findOrFail($id);
        $patients = User::whereHas('roles',function ($q) {
            $q->Patient();
          })->get();
        return new ViewResponse('backend.profiles.edit',compact('patients','profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request, $id)
    {
        $profile = Profile::findOrFail($id);
        $updatedProfile = Profile::UpdateFormRequest($request,$profile);
        return new RedirectResponse(route('admin.profiles.index'), ['flash_success' => __('alerts.backend.profiles.updated')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteProfileRequest $request,$id)
    {
        $profileData = Profile::findOrFail($id);
        $profileData->delete();
        return new RedirectResponse(route('admin.profiles.index'), ['flash_success' => __('alerts.backend.profiles.deleted')]);
    }
}
