<?php

namespace App\Models\Leads;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CdeRegistration extends Model
{
    use HasFactory;
    protected $connection = 'revamp';
    
    protected $table = 'cde_registrations';
}
