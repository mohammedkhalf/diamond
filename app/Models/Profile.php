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
        'patient_id',
        'age',
        'gender',
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
        $profileData = Profile::create($request->only('patient_id','gender',
        'age','height','weight','patient_complain','history_of_patient_disorder'
        ,'past_medical_history','family_history','diagnoses_case','use_drug','sport',
        'cohols','smoke','caffeine','other_life_style','immunization','allergies_drugs',
        'environment','past_history_drugs','past_history_drugs_response','current_prescribed_drugs',
        'current_prescribed_drugs_response'));

        return  $profileData;
    }

    public static function UpdateFormRequest ($request,$profile)
    {
        $updatedProfile = $profile->update($request->only('patient_id','gender',
        'age','height','weight','patient_complain','history_of_patient_disorder'
        ,'past_medical_history','family_history','diagnoses_case','use_drug','sport',
        'cohols','smoke','caffeine','other_life_style','immunization','allergies_drugs',
        'environment','past_history_drugs','past_history_drugs_response','current_prescribed_drugs',
        'current_prescribed_drugs_response'));

        return  $updatedProfile;
    }
}
