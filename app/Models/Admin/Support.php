<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;
    protected $table = 'supports';
    protected $fillable = ['user_id','title', 'message'];

    public function chats(){
        return $this->hasMany(SupportChat::class,'support_id','id')->orderBy('created_at');
    }
}
