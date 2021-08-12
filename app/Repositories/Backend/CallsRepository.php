<?php

namespace App\Repositories\Backend;

use App\Exceptions\GeneralException;
use App\Models\CallLog;
use App\Repositories\BaseRepository;

class CallsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = CallLog::class;
    /**
     * Sortable.
     *
     * @var array
     */

    public function getForDataTable()
    {
        return $this->query()
            ->select([
                'call_logs.id',
                'call_logs.name',
                'call_logs.phone',
                'call_logs.created_at',
            ]);
    }

}