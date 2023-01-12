<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{

    use HasFactory;
    protected $fillable = [
        'resident_id',
        'assessment_type',
        'facility_name',
        'clinical_category',
        'days'
    ];

    protected $primaryKey = 'resident_id';

    public function quotations()
    {
        return $this->hasMany(Quotation::class, 'resident_ref', 'resident_id');
    }
}