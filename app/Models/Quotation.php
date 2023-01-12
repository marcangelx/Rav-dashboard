<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    protected $fillable = [
        'resident_ref',
        'discipline',
        'pay',
        'category',
        'gg_score',
        'group',
        'cmi'
    ];
    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }
}
