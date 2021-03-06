<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Auth\User;

class Profile extends Model
{
    use SoftDeletes;

    protected $table = "profiles";

    protected $guarded = [];

    protected $fillabel = [
        'code',
        'pateint_name',
        'patient_id',
        'age',
        'gender',
        'phone_number',
        'date_of_birth',
        'status',
        'created_by',
        'therapist',
        'address',
        'last_receipt',
        'last_receipt_value',
        'payment_type',
        'chronic_diseases',
        'height',
        'weight',
        'patient_complain',
        'history_of_patient_disorder',
        'past_medical_history',
        'family_history',
        'diagnoses_case',
        'use_drug',
        'sport',
        'cohols',
        'smoke',
        'caffeine',
        'other_life_style',
        'immunization',
        'allergies_drugs',
        'environment',
        'past_history_drugs',
        'past_history_drugs_response',
        'current_prescribed_drugs',
        'current_prescribed_drugs_response'
    ];
    //relationships
    public function users()
    {
        return $this->belongsTo(User::class,'patient_id');
    }
    //static methods
    public static function CreateFormRequest($request)
    {
        // dd($request->all());
        $profileData = Profile::create(array_merge($request->only('code','pateint_name','gender',
        'phone_number','date_of_birth','status','therapist','address','last_receipt',
        'last_receipt_value','payment_type','chronic_diseases',
        'age','height','weight','patient_complain'),['created_by'=>auth()->user()->first_name]));

        return  $profileData;
    }

    public static function UpdateFormRequest ($request,$profile)
    {
        $updatedProfile = $profile->update(array_merge($request->only('pateint_name','gender',
        'phone_number','date_of_birth','status','therapist','address','last_receipt',
        'last_receipt_value','payment_type','chronic_diseases',
        'age','height','weight','patient_complain'),['created_by'=>auth()->user()->first_name]));

        return  $updatedProfile;
    }
}
