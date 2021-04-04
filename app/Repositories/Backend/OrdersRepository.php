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
            ->select([
                'id',
                'patient_id',
                'drug_id',
                'amount',
                'dose',
                'created_at',
                'created_at',
            ]);
    }

}