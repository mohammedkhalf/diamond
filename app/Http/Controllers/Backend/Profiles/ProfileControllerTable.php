<?php

namespace App\Http\Controllers\Backend\Profiles;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Backend\ProfilesRepository;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use App\Models\Profile;

class ProfileControllerTable extends Controller
{
    protected $repository;
    /**
     * @param \App\Repositories\Backend\FaqsRepository $faqs
     */
    public function __construct(ProfilesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->editColumn('patient_id', function ($profile) {
                return $profile->users->first_name . $profile->users->last_name;
            })
            ->editColumn('phoneNumber', function ($profile) {
                return $profile->users->phone_number;
            })
            ->editColumn('email', function ($profile) {
                return $profile->users->email;
            })
            ->editColumn('age', function ($profile) {
                return $profile->age;
            })
            ->editColumn('height', function ($profile) {
                return $profile->height;
            })
            ->editColumn('weight', function ($profile) {
                return $profile->weight;
            })
            ->addColumn('actions', function ($profile) {

                $btn = '<a href="'.route('admin.profiles.show', $profile).'" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.view').'" class="btn btn-success btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>'.'<a href="'.route('admin.profiles.edit', $profile).'" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.edit').'" class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i>
                       </a>';
                $btn = $btn.'<a href="'.route('admin.profiles.destroy',$profile).'"
                    class="btn btn-primary btn-danger btn-sm"
                    data-method="delete"
                    data-trans-button-cancel="'.trans('buttons.general.cancel').'"
                    data-trans-button-confirm="'.trans('buttons.general.crud.delete').'"
                    data-trans-title="'.trans('strings.backend.general.are_you_sure').'">
                    <i data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.delete').'" class="fa fa-trash"></i>
                    </a>';

                return $btn;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

}
