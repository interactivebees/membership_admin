<?php

namespace App\Models\Leads\Training;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $connection = 'leads';
    protected $table = 'categories';

    /**
     * Define the relationship with the Program model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function program()
    {
        return $this->hasOne(Program::class, 'cat_id', 'cat_slug')
            ->where('status', '=', 1);
    }
    public function calenderprograms()
    {
        return $this->hasMany(Program::class, 'cat_id', 'cat_slug');
    }
}
