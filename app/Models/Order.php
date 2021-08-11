<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Auth\User;
use App\Models\Drug;

class Order extends Model
{
    //
    protected $table = "orders";

    protected $fillable = [
        'patient_name',
        'patient_id',
        'drug_id',
        'amount',
        'dose',
        'created_at',
        'updated_by',
    ];

    //Relationships
    public function users()
    {
        return $this->belongsTo(User::class,'patient_id');
    }

    public function drugs()
    {
        return $this->belongsTo(Drug::class,'drug_id');
    }

    //static methods
    public static function getDose ($dose)
    {
        switch($dose){
            case "1":
                return trans('labels.backend.access.orders.one_tuple_per_day');
                break;
            case "2":
                return trans('labels.backend.access.orders.two_tuple_per_day');
                break;
            case "3":
                return trans('labels.backend.access.orders.three_tuple_per_day');
                break;
            default:
                return 'NO Dose';
        }

    }
}
