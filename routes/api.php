<?php

use App\Http\Controllers\CcAvenues\PaymentController;
use App\Http\Controllers\Membership\CategoryController;
use App\Http\Controllers\Membership\RegisterController;
use App\Http\Controllers\Membership\RenewalController;
use App\Http\Controllers\Membership\CertificateController;
use App\Http\Controllers\Membership\UpgradeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Notification\EventNotificationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/membership-category-create', [CategoryController::class, 'store']);
Route::post('/membership-register-create', [RegisterController::class, 'store']);
Route::post('/membershioUpdate/{id}', [RegisterController::class, 'membershioUpdate']);
Route::post('/payableAmount', [RegisterController::class, 'payableAmount'])->name('payable.amount');

Route::get('/initiatePayment', [PaymentController::class, 'initiatePayment'])->name('initiate.payment');
Route::post('/payment/response', [PaymentController::class, 'paymentResponse'])->name('payment.response');

Route::get('/notifications', [EventNotificationController::class, 'index'])->name('notifications');



Route::post('/renewal', [RenewalController::class, 'renewal'])->name('renewal');
Route::post('/upgrade', [UpgradeController::class, 'upgrade'])->name('upgrade');
Route::post('/generatePdf', [CertificateController::class, 'generatePdf'])->name('cahocon_awards_generatepdf');
Route::post('/sakcon/generatePdf', [CertificateController::class, 'generateSakconPdf'])->name('sakcon_awards_generatepdf');
Route::post('/generateEnvironmentpdf', [CertificateController::class, 'generateEnvironementPdf']);
Route::post('/generateHospitalpdf', [CertificateController::class, 'generateHospitalPdf']);
Route::post('/cahotech/generatePdf', [CertificateController::class, 'generateCahotechpdf']);
Route::post('/hospital/innovation/generatePdf', [CertificateController::class, 'generateInnovationpdf']);
