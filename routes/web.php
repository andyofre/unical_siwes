<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use App\Models\Payment;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\SiwesPaymentController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/',  'welcome');

Auth::routes();



Route::get('/verification', [\App\Http\Controllers\Auth\PreRegisterController::class, 'index'])->name('verify.student');



Route::post('/pre-register', [App\Http\Controllers\Auth\PreRegisterController::class, 'checkStudentFeeStatus'])->name('preregister');

Route::get('/registration', [\App\Http\Controllers\Auth\PreRegisterController::class, 'registration'])->name('pass.verification');

Route::post('/registration/create', [\App\Http\Controllers\Auth\PreRegisterController::class, 'store'])->name('create.student');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin')->group(function () {

    Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

    Route::get('/approve/payment/{student}', [App\Http\Controllers\AdminController::class, 'approve'])->name('approvepayment');


    Route::resource('/students', App\Http\Controllers\AdminStudentController::class);


    Route::resource('/companies', App\Http\Controllers\AdminCompaniesController::class);


    Route::resource('/supervisors', App\Http\Controllers\AdminSupervisorController::class);


    Route::resource('/payments', App\Http\Controllers\AdminPaymentController::class);


    Route::resource('/requests', App\Http\Controllers\AdminRequestController::class);

    Route::get('form/upload', [\App\Http\Controllers\AdminController::class, 'siwes'])->name('all.forms');

    Route::post('form/upload/create', [\App\Http\Controllers\AdminController::class, 'formUpload'])->name('uploadform');

//    Route::get('');



});

Route::middleware(['auth', 'school', 'admin'])->prefix('school')->name('school')->group(function () {

    Route::get('/dashboard',  [App\Http\Controllers\InstituteController::class, 'index'])->name('schooldashboard');

});

Route::middleware(['auth','company', 'admin'])->prefix('company')->name('company')->group(function () {

    Route::get('/dashboard',  [App\Http\Controllers\CompanyController::class, 'index'])->name('companydashboard');

});

Route::middleware(['auth', 'student', 'admin'])->prefix('/student')->name('student')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\StudentsController::class, 'index'])->name('dashboard');
    Route::get('/pending', [App\Http\Controllers\StudentsController::class, 'pending'])->name('pending');
    Route::post('/startit/request', [App\Http\Controllers\StudentsController::class, 'startit'])->name('startIT');

    Route::get('/upload-passport', [App\Http\Controllers\UploadPassportController::class, 'index'])->name('passport');
    Route::post('/save-passport', [App\Http\Controllers\UploadPassportController::class, 'upload'])->name('upload');

    Route::get('/letter/apply', [App\Http\Controllers\LetterController::class, 'index'])->name('getletter');
    Route::get('payment/callback', [App\Http\Controllers\PaymentController::class, 'handleCallBack'])->name('callback');

    Route::get('/webhook', [\App\Http\Controllers\PaymentController::class, 'webhook'])->name('siwes_fee');


    Route::post('letter/paying', [\App\Http\Controllers\PaymentController::class, 'payFee'])->name('paying');
//    Route::post('/letter/pay/siwes', [\App\Http\Controllers\SiwesPaymentController::class, 'makePayment'])->name('siwes.fee');

    Route::get('/letter/paid', [App\Http\Controllers\PaymentController::class, 'siwesFeePaid'])->name('paidsiwesfee');
    Route::get('/letter/pending', [App\Http\Controllers\PaymentController::class, 'siwesFeePending'])->name('pendingswiesfee');
    Route::get('/letter', [App\Http\Controllers\letterController::class, 'letter'])->name('letter');


    Route::get('/{id}/profile', [App\Http\Controllers\StudentsController::class, 'profile'])->name('profile');
    Route::get('/request', [App\Http\Controllers\StudentsController::class, 'request'])->name('request');

    Route::get('/log', [App\Http\Controllers\StudentsController::class, 'log'])->name('log');
    Route::get('/log/{week}/{student_id}', [App\Http\Controllers\LogController::class, 'logweek'])->name('logweek');
    Route::get('/log/{week}/{day}/{student_id}/', [App\Http\Controllers\LogController::class, 'logday'])->name('logday');

    Route::get('siwes/form', [\App\Http\Controllers\StudentsController::class, 'readForm'])->name('uploading');


    Route::get('form/preview{id}', [\App\Http\Controllers\StudentsController::class, 'preview'])->name('preview.file');

    Route::get('form/download{pdf_file}', [\App\Http\Controllers\StudentsController::class, 'download'])->name('file.download');


});

//Route::get('authenticate', function () {
//
//    // dd(config('monnify.api'));
//    // $token = $request->session()->token();
//
//    // $token = csrf_token();
//    $response = Http::withHeaders([
//        'Authorization' => 'Basic TUtfVEVTVF9WOU00V0g5UFBGOlVMUDJZVFo2RERVTVlKWUxHWFdHVURYTURSVlNTUFNB',
//        'Content-Type' => 'application/json',
//    ])->post('https://sandbox.monnify.com/api/v1/auth/login');
//    // base64_encode('MK_TEST_V9M4WH9PPF:ULP2YTZ6DDUMYJYLGXWGUDXMDRVSSPSA');
//    if ($response->successful()) {
//        $data = $response->body();
//    }else {
//        $data = null;
//    }
//
//    return $data;
//
//});

Route::get('create-invoice', function () {


});


Route::get('all-invoice', function () {

    // $response = Http::withHeaders([
    //     'Authorization' => 'Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOlsibW9ubmlmeS1wYXltZW50LWVuZ2luZSJdLCJzY29wZSI6WyJwcm9maWxlIl0sImV4cCI6MTYzMTA2NTIzNCwiYXV0aG9yaXRpZXMiOlsiTVBFX01BTkFHRV9MSU1JVF9QUk9GSUxFIiwiTVBFX1VQREFURV9SRVNFUlZFRF9BQ0NPVU5UIiwiTVBFX0lOSVRJQUxJWkVfUEFZTUVOVCIsIk1QRV9SRVNFUlZFX0FDQ09VTlQiLCJNUEVfQ0FOX1JFVFJJRVZFX1RSQU5TQUNUSU9OIiwiTVBFX1JFVFJJRVZFX1JFU0VSVkVEX0FDQ09VTlQiLCJNUEVfREVMRVRFX1JFU0VSVkVEX0FDQ09VTlQiLCJNUEVfUkVUUklFVkVfUkVTRVJWRURfQUNDT1VOVF9UUkFOU0FDVElPTlMiXSwianRpIjoiYjdmNTYzM2YtZjRjMC00NmM3LWI0MjctZTJkM2E3MzFmNTFkIiwiY2xpZW50X2lkIjoiTUtfVEVTVF9WOU00V0g5UFBGIn0.QcQPnQJFn6NWMPGCt7CtxGdFpo6DPBQsQtaAKrNMhVJ0_A9kQWmYWusDhHvYGHlMtxPY4AMKoj67IoIfV8_fY3HJg_LjWbufDbyTyX7wgs2PQClet8OpXk9oWbzQo8vIFbyqJ8xT6a9Wr1BYrWVoNNe7U7Dx_eFQjkBlI4ZBvapDBIZeYmGjxL0m0pgbHrrTEwfgFVMUT0i8lH2CJafIz_cvVN3yo_mzJqpTv9heTe5-7GCu-geKhyTcnQKJPzAqa6SBZRkfNPXFXoKT9AY9oJF7Sa_6c_mE4wElee5XJPeKCCnb0xd6NAW9QrfDZg0tXwzB_FV30atAY4NGqwtRlQ',
    //     'Content-Type' => 'application/json',
    // ])->get('https://sandbox.monnify.com/api/v1/invoice/all');

    // if ($response->successful()) {
    //     $data = $response->body();
    // }else {
    //     $data = $response->body();
    // }

    // return $data;

});

Route::get('payment-notification', function (Request $request) {


        // $data = Payment::updateOrCreate(['invoiceReference' => request('paymentReference')], [
        //     "transactionReference" => request('transactionReference'),
        //     "invoiceReference" => request('invoiceReference'),
        //     "invoiceStatus" => request('invoiceStatus')
        // ]);

        // return $data;

        // $transactionReference = request()"MNFY|20200900003149|000000";
        // $paymentReference = "MNFY|20200900003149|000000";
        // $amountPaid = "180000.00";
        // $totalPayable = "180000.00";
        // $settlementAmount = "179989.25";
        // $paidOn = "09/09/2020 11:31:56 AM";
        // $paymentStatus = "PAID";
        // $paymentDescription = "Ojinaka Daniel";
        // $transactionHash ="a294a0bfxxxxxxxxxxxxxxxxxxxx0b399cf077e30cf2ad54a7da9e17583deb5130286e6bb5dxxxx353f027725b83fcafac02d2e181f53edd5f";
        // $currency = "NGN";
        // $paymentMethod = "ACCOUNT_TRANSFER";
        // $product = [
        //         $type = "RESERVED_ACCOUNT",
        //         $reference = "7b3xxxx072a44axxxxxxx2b6c2374458"
        // ];
        // $cardDetails = null;
        // $accountDetails = [
        //         $accountName = "John Ciroma Abuh",
        //         $accountNumber = "******4872",
        //         $bankCode = "000015",
        //         $amountPaid = "180000.00"
        // ];
        // $accountPayments = [
        //         $accountName = "John Ciroma Abuh",
        //         $accountNumber = "******4872",
        //         $bankCode = "000015",
        //         $amountPaid = "180000.00"
        // ];
        // $customer = [
        //         $email = "dojinaka@monnify.com",
        //         $name = "Daniel Ojinaka"
        // ];
        // $metaData = [];


});

Route::get('/start', [SiwesPaymentController::class, 'makePayment'])->name('test');
