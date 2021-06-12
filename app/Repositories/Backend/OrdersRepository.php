<?php

namespace App\Repositories\Backend;

use App\Exceptions\GeneralException;
use App\Models\Order;
use App\Repositories\BaseRepository;


class OrdersRepository extends BaseRepository
{
	 /**
     * Associated Repository Model.
     */
    const MODEL = Order::class;
    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'patient_id',
        'drug_id',
        'amount',
        'dose',
        'created_at',
        'updated_at',
    ];

    public function getForDataTable()
    {
        return $this->query()
            ->leftjoin('users','users.id','=','orders.patient_id')
            ->leftjoin('drugs','drugs.id','=','orders.drug_id')
            ->select([
                'orders.id',
                'orders.patient_id',
                'orders.drug_id',
                'orders.amount',
                'orders.dose',
                'orders.created_at',
                'users.first_name',
                'drugs.name'
            ]);
    }

}