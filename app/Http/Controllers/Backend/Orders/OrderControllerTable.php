<?php

namespace App\Http\Controllers\Backend\Orders;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Backend\Orders\ManageOrdersRequest;
use App\Repositories\Backend\OrdersRepository;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use App\Models\Order;

class OrderControllerTable extends Controller
{
     protected $repository;
    /**
     * @param \App\Repositories\Backend\FaqsRepository $faqs
     */
    public function __construct(OrdersRepository $repository)
    {
        $this->repository = $repository;
    }

     public function __invoke(ManageOrdersRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->editColumn('patient_id', function ($order) {
                return $order->users->first_name.$order->users->last_name;
            })
            ->editColumn('drug_id', function ($order) {
                return $order->drugs->name;
            })
            ->editColumn('amount', function ($order) {
                return $order->amount;
            })
             ->editColumn('dose', function ($order) {
                return Order::getDose($order->dose);
            })
            ->editColumn('created_at', function ($order) {
                return Carbon::parse($order->created_at)->toDateString();
            })
            ->addColumn('actions', function ($order) {

                $btn = '<a href="'.route('admin.orders.edit', $order).'" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.edit').'" class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i>
                    </a>';
                $btn = $btn.'<a href="'.route('admin.orders.destroy',$order).'"
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
