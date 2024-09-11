<?php

use App\Http\Controllers\Calendar\CalendarController;
use App\Http\Controllers\DataEntryController;
use App\Http\Controllers\Download\DownloadController;
use App\Http\Controllers\Faq\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Membership\CertificateController;
use App\Http\Controllers\Membership\UpdateController;
use App\Http\Controllers\Membership\PlanPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Membership\RegisterController;
use App\Http\Controllers\Offline\PaymentProcessController;
use App\Http\Controllers\Payment\OfflineController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Support\SupportController;
use App\Http\Controllers\Notification\PodcastEventNotificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Guest Url's
Route::get('/', [HomeController::class, 'index'])->name('home.page');
Route::get('/membership/{slug}', [HomeController::class, 'show'])->name('home.show');

Route::middleware(['auth', 'verified','has.done.payment'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/membership-certificate', [CertificateController::class,'certificate'])->name('membership.certificate');
    Route::view('/membership-resources', 'membership.membership-backend.membership-resources');

    Route::get('membership-calendar', [CalendarController::class, 'index']);
    Route::post('ajexDateFilterRequest',[CalendarController::class, 'ajexDateFilterRequest']);

    Route::get('/faq', [FaqController::class,'index']);

    Route::post('/update-organization-detail',[UpdateController::class, 'organizationDetail'])->name('update.organization.detail');
    Route::post('/update-organization-head-detail',[UpdateController::class, 'organizationDetailHead'])->name('update.organization.head.detail');
    Route::post('/update-organization-one-detail',[UpdateController::class, 'organizationDetailOne'])->name('update.organization.one.detail');
    Route::post('/update-organization-two-detail',[UpdateController::class, 'organizationDetailTwo'])->name('update.organization.two.detail');
    Route::post('/update-organization-institution-detail',[UpdateController::class, 'organizationHealthcareInstitution'])->name('update.organization.institution.detail');
    Route::post('/update-profile-detail',[UpdateController::class, 'profileUpdate'])->name('update.profile.detail');

    Route::post('/update-personal-detail',[UpdateController::class, 'personalDetail'])->name('update.personal.detail');
    Route::post('/update-core-service-detail',[UpdateController::class, 'coreServicePost'])->name('update.core.service');



    Route::get('support-history', [SupportController::class,'getHistory'])->name('support.history');
    Route::get('support-view/{id}/view',[SupportController::class,'supportView'])->name('support.view');
    Route::get('support-form', [SupportController::class,'showForm'])->name('support.form');
    Route::post('support-submit',[SupportController::class,'submitForm'])->name('support.submit');
    Route::post('support-reply',[SupportController::class,'submitReply'])->name('support.reply');
    Route::get('/notification-dashboard', [PodcastEventNotificationController::class,'index'])->name('notification');
});


Route::view('/regular-quality-membership', 'membership.membership-front.regular-quality-membership');
// Membership Routes
Route::view('/membership-dashboard', 'membership.membership-backend.membership-dashboard');
// Route::view('/membership-calendar', 'membership.membership-backend.membership-calendar');
Route::view('/membership-reports', 'membership.membership-backend.membership-reports');


Route::get('/offline_payment_process',[PaymentProcessController::class,'index']);
Route::get('/payment_process', [PaymentProcessController::class,'methods'])->name('payment.process');
Route::post('/post-verification-data', [PaymentProcessController::class,'postVerificationData'])->name('post.verification.data');
Route::get('/payment-thank-you',  [PaymentProcessController::class,'thanku'])->name('payment.thank.you');


Route::view('/payment-success', 'offline_payment.payment-success');


Route::get('/download', [DownloadController::class,'download']);

Route::get('/user-membership', [PlanPageController::class,'index']);

Route::view('/edit-membership', 'membership.membership-backend.edit-membership');
Route::view('/profile-membership', 'membership.membership-backend.profile-membership');

Route::view('/thankyou', 'membership.membership-front.thankyou')->name('thank.you');
Route::view('/admin-dashboard', 'membership.membership-backend.admin-dashboard');

Route::view('/healthcare-membership-renew-test', 'membership.membership-front.test');

// Route::view('/membership', 'membership.membership-front.membership');
Route::post('/membership-form/hospital-email-check', [RegisterController::class, 'hospitalEmailEheck']);
Route::get('/membership-form', [RegisterController::class, 'index'])->name('membership.form');
Route::post('/membership-register-create', [RegisterController::class, 'store'])->name('membership.register.store');
Route::post('/membership-register-individual-create', [RegisterController::class, 'storeIndividual'])->name('membership.register.individual.store');

Route::get('/membershioUpdate/{id}', [RegisterController::class, 'membershioUpdate'])->name('membershioUpdate');


Route::get('/offline-payment-success', [OfflineController::class,'index'])->name('offline-payment.success');

Route::get('member-data-entry',[DataEntryController::class, 'membershipData'])->name('member-data-entry');

require __DIR__.'/auth.php';
