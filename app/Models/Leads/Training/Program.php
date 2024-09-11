<?php

namespace App\Models\Leads\Training;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $connection = 'leads';
    protected $table = 'programs';

}
