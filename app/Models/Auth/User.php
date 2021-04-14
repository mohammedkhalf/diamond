<?php

namespace App\Models\Auth;

use App\Models\Auth\Traits\Access\UserAccess;
use App\Models\Auth\Traits\Attributes\UserAttributes;
use App\Models\Auth\Traits\Methods\UserMethods;
use App\Models\Auth\Traits\Relationships\UserRelationships;
use App\Models\Auth\Traits\Scopes\UserScopes;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

/**
 * Class User.
 */
class User extends BaseUser
{
    protected $table = "users";

    use HasApiTokens, Notifiable, SoftDeletes, UserAttributes, UserScopes, UserAccess, UserRelationships, UserMethods;

    public function getFullnameAttribute() //fullname
    {
        return "{$this->first_name} {$this->last_name}";
    }

    //Whatsapp Notification
    public function routeNotificationForWhatsApp()
    {
      return $this->phone_number;
    }
}
