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
            ->select([
                'id',
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
            ]);
    }

}