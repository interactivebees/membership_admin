<?php

namespace App\Models\Membership;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array|string|null $post)
 */
class Register extends Model
{
    use HasFactory;

    protected $table = 'membership_registers';
    protected $guarded = [];

    public function membershipCategoryget(){
        return $this->hasOne(Category::class,'id','membership_category_id');
    }

    public function getLatestMembershipDetail(){
        return $this->hasOne(RegisterDetail::class,'membership_register_id','id')->latest();
    }

    public function getLatestTwoMembershipDetail(){
        return $this->hasMany(RegisterDetail::class,'membership_register_id','id')->latest()->take(2);
    }

}
