<?php

namespace App\Models\Membership;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalBedCategory extends Model
{
    use HasFactory;

    protected $table = 'hospital_categories';
    protected $guarded = [];
}
