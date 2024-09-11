<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtpBlock extends Model
{
    use HasFactory;

    protected $table = 'otp_blocks';
    protected $fillable = ['user_email', 'wrong_attempts', 'resend_attempts', 'blocked_until','wrong_attempt_block', 'last_resend_attempt','last_wrong_attempt'];
    
}
