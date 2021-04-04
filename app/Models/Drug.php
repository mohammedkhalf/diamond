<?php

namespace App\Models;
use App\Models\Traits\Attributes\DrugAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\DrugRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Drug extends BaseModel
{
    use ModelAttributes, SoftDeletes, DrugAttributes, DrugRelationships;

    protected $table = "drugs";

    protected $fillable = [
        'name',
        'manufacture',
        'amount',
        'price',
        'created_by',
        'updated_by',
    ];

}
