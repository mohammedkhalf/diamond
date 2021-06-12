<?php

namespace App\Http\Controllers\Backend\Orders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Orders\CreateOrdersRequest;
use App\Http\Requests\Backend\Orders\DeleteOrdersRequest;
use App\Http\Requests\Backend\Orders\EditOrdersRequest;
use App\Http\Requests\Backend\Orders\StoreOrdersRequest;
use App\Http\Requests\Backend\Orders\UpdateOrdersRequest;
use App\Http\Requests\Backend\Orders\ManageOrdersRequest;
use Illuminate\Http\Request;
use App\Http\Responses\ViewResponse;
use App\Repositories\Backend\OrdersRepository;
use App\Models\Order;
use App\Http\Responses\RedirectResponse;
use App\Models\Auth\User;
use App\Models\Drug;
use App\Notifications\Backend\Auth\PurchaseReminder;
use App\Notifications\Backend\Auth\PhoneInbox;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repository;
    /**
     * @param \App\Repositories\Backend\FaqsRepository $faq
     */
    public function __construct(OrdersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(ManageOrdersRequest $request)
    {
        return new ViewResponse('backend.orders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateOrdersRequest $request)
    {
        $pateints = User::whereHas('roles',function ($q) {
          $q->Patient();
        })->get();
        $drugs = Drug::all();
        return new ViewResponse('backend.orders.create',compact('pateints','drugs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrdersRequest $request)
    {
        $orderData = Order::create($request->only('patient_id','drug_id','amount','dose'));
        return new RedirectResponse(route('admin.orders.index'), ['flash_success' => __('alerts.backend.orders.created')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EditOrdersRequest $request,Order $order)
    {
        $pateints = User::whereHas('roles',function ($q) {
            $q->Patient();
          })->get();
          $drugs = Drug::all();
        return new ViewResponse('backend.orders.edit',compact('pateints','drugs','order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrdersRequest $request, $id)
    {
        $orderData = Order::findOrFail($id);
        $orderData->update($request->only('patient_id','drug_id','amount','dose'));
        return new RedirectResponse(route('admin.orders.index'), ['flash_success' => __('alerts.backend.orders.updated')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteOrdersRequest $request, $id)
    {
        $orderData = Order::findOrFail($id);
        $orderData->delete();
        return new RedirectResponse(route('admin.orders.index'), ['flash_success' => __('alerts.backend.orders.deleted')]);
    }
    //send whatsapp
    public function sendWhatsapp (Request $request , Order $order)
    {
        $request->user()->notify(new PurchaseReminder($order));
        return new RedirectResponse(route('admin.orders.index'), ['flash_success' => __('alerts.backend.orders.send-whatsapp-successfully')]);
    }

    //send whatsapp
    public function sendPhoneNumber (Request $request , Order $order)
    {
        // dd($order);
        $request->user()->notify(new PhoneInbox($order));
        return new RedirectResponse(route('admin.orders.index'), ['flash_success' => __('alerts.backend.orders.send-whatsapp-successfully')]);
    }
}