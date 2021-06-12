<?php

namespace App\Http\Controllers\Backend\Drugs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Drugs\ManageDrugsRequest;
use App\Repositories\Backend\DrugsRepository;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class DrugTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\FaqsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\FaqsRepository $faqs
     */
    public function __construct(DrugsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->editColumn('id', function ($drugs) {
                return $drugs->id;
            })
            ->editColumn('name', function ($drugs) {
                return $drugs->name;
            })
            ->editColumn('manufacture', function ($drugs) {
                return $drugs->manufacture;
            })
            ->editColumn('amount', function ($drugs) {
                return $drugs->amount;
            })
             ->editColumn('price', function ($drugs) {
                return $drugs->price;
            })
            ->editColumn('created_at', function ($drugs) {
                return Carbon::parse($drugs->created_at)->toDateString();
            })
            ->addColumn('actions', function ($drugs) {

                $btn = '<a href="'.route('admin.drugs.edit', $drugs).'" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.edit').'" class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i>
                    </a>';
                $btn = $btn.'<a href="'.route('admin.drugs.destroy',$drugs).'"
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
