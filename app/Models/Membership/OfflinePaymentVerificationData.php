<?php

namespace App\Models\Membership;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfflinePaymentVerificationData extends Model
{
    use HasFactory;

    protected $table = 'offline_payment_verification_data';
    protected $guarded = [];
}
