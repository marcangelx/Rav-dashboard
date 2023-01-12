<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Assessment;
use App\Models\AssessmentQuotation;
use App\Models\Quotation;
use App\Models\ResidentAssessment;
use Database\Factories\AssessmentQuotationFactory;
use Database\Factories\ResidentAssessmentFactory;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $aAssessments = [   
            [
            'resident_id' => '1247',
            'assessment_type' => 'OBRA',
            'facility_name' => 'Centinela Skilled Nursing & Wellness Centre',
            'clinical_category' => 'Acute Infections',
            'days' => 3
            ],
            [
                'resident_id' => '1246',
                'assessment_type' => 'IPA',
                'facility_name' => 'Brighton Place - San Diego',
                'clinical_category' => 'Acute Infections',
                'days' => 223
            ]
        ];
        $aQuotations = [
            [
                'resident_ref' => '1245',
                'discipline' => 'PT',
                'pay' => 1232.4,
                'category' => 'Non-Orthopedic Surgery & Acute Neurologic',
                'gg_score' =>  231,
                'group' => 'LDE1',
                'cmi' => 0.42
            ],
            [
                'resident_ref' => '1246',
                'discipline' => 'PT',
                'pay' => 1232.4,
                'category' => 'Non-Orthopedic Surgery & Acute Neurologic',
                'gg_score' =>  231,
                'group' => 'LDE1',
                'cmi' => 0.42
            ],
            [
                'resident_ref' => '1247',
                'discipline' => 'PT',
                'pay' => 1232.4,
                'category' => 'Non-Orthopedic Surgery & Acute Neurologic',
                'gg_score' =>  231,
                'group' => 'LDE1',
                'cmi' => 0.42
            ],

        ];
        foreach ($aAssessments as $aData) {
            Assessment::create($aData);
        }
        foreach ($aQuotations as $aData) {
            Quotation::create($aData);
        }
    
        
    }   
}
