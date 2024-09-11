<?php

namespace App\Models\Membership;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array|string|null $post)
 */
class RegisterDetail extends Model
{
    use HasFactory;

    protected $table = 'membership_registers_details';
    protected $guarded = [];
}
