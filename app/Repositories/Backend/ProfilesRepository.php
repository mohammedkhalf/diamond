<?php

namespace App\Repositories\Backend;

use App\Exceptions\GeneralException;
use App\Models\Profile;
use App\Repositories\BaseRepository;

class ProfilesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Profile::class;
    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'patient_id',
        'age',
        'gender',
        'height',
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

    public function getForDataTable()
    {
        return $this->query()
            ->leftjoin('users', 'users.id', '=', 'profiles.patient_id')
            ->select([
                'profiles.id',
                'profiles.patient_id',
                'profiles.age',
                'profiles.gender',
                'profiles.phone_number',
                'profiles.date_of_birth',
                'profiles.created_by',
                'profiles.status',
                'profiles.therapist',
                'profiles.address',
                'profiles.last_receipt',
                'profiles.last_receipt_value',
                'profiles.payment_type',
                'profiles.chronic_diseases',
                'profiles.height',
                'profiles.weight',
                'profiles.patient_complain',
                'profiles.history_of_patient_disorder',
                'profiles.past_medical_history',
                'profiles.family_history',
                'profiles.diagnoses_case',
                'profiles.use_drug',
                'profiles.sport',
                'profiles.cohols',
                'profiles.smoke',
                'profiles.caffeine',
                'profiles.other_life_style',
                'profiles.immunization',
                'profiles.allergies_drugs',
                'profiles.environment',
                'profiles.past_history_drugs',
                'profiles.past_history_drugs_response',
                'profiles.current_prescribed_drugs',
                'profiles.current_prescribed_drugs_response',
                'users.first_name'
            ]);
    }

}