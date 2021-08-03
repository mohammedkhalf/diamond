<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Auth\User;

class CallLog extends Model
{
    use SoftDeletes;

    protected $table = "call_logs";

    protected $guarded = [];

    protected $fillabel = ['name','phone','duration','date_time'];
}
