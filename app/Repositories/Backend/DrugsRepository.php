<?php

namespace App\Repositories\Backend;

use App\Exceptions\GeneralException;
use App\Models\Drug;
use App\Repositories\BaseRepository;

class DrugsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Drug::class;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'name',
        'manufacture',
        'amount',
        'price',
        'created_at',
        'updated_at',
    ];

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                'id',
                'name',
                'manufacture',
                'amount',
                'price',
                'created_by',
                'created_at',
            ]);
    }
    
}
