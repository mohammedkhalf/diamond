<?php

namespace App\Http\Controllers\Backend\Calls;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Backend\CallsRepository;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use App\Models\CallLog;

class CallControllerTable extends Controller
{
    protected $repository;
    /**
     * @param \App\Repositories\Backend\FaqsRepository $faqs
     */
    public function __construct(CallsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->editColumn('id', function ($call) {
                return $call->id;
            })
            ->editColumn('name', function ($call) {
                return $call->name;
            })
            ->editColumn('phone', function ($call) {
                return $call->phone;
            })
            ->editColumn('created_at', function ($call) {
                return Carbon::parse($call->created_at);
            })
            ->addColumn('actions', function ($call) {
                return '<a href="'.route('admin.calls.destroy',$call).'"
                    class="btn btn-primary btn-danger btn-sm"
                    data-method="delete"
                    data-trans-button-cancel="'.trans('buttons.general.cancel').'"
                    data-trans-button-confirm="'.trans('buttons.general.crud.delete').'"
                    data-trans-title="'.trans('strings.backend.general.are_you_sure').'">
                    <i data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.delete').'" class="fa fa-trash"></i>
                    </a>';

            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
