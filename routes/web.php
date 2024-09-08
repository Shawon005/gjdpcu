<?php
use App\Http\Controllers as Admin;
use Illuminate\Support\Facades\Route;

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
Route::get('/clear', function() {
	Artisan::call('cache:clear');
	Artisan::call('config:cache');
	Artisan::call('view:clear');
	Artisan::call('route:clear');
	return "Cleared!";
});

Route::get('/', function () {
    return view('frontend.index');
})->name('home');
Route::get('/connect-us', function () {
    return view('frontend.connect-us');
})->name('connect');

Route::get('/schedule', function () {
    return view('frontend.schedule');
})->name('schedule');
Route::get('/instruction', function () {
    return view('frontend.instruction');
})->name('instruction');
Route::get('/payment', function () {
    return view('frontend.payment-summary');
})->name('payment');
Route::get('/registration', function () {
    return view('frontend.registration');
})->name('registration');
Route::get('/registration', function () {
    return view('frontend.registration');
})->name('registration');

Route::get('/registration-without-event', function () {
    return view('frontend.register');
})->name('register');

Route::get('/login', function () {
    return view('frontend.login');
})->name('login');

Route::get('/password', function () {
    return view('frontend.password');
})->name('password');



Route::get('/paper', function () {
    return view('frontend.paper');
})->name('paper');
Route::get('/themes', function () {
    return view('frontend.themes');
})->name('themes');
Route::get('/submission', function () {
    return view('frontend.submission');
})->name('submission');

Route::get('/register_con', function () {
    return view('frontend.register_con');
})->name('register_con');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/borchure', function () {
    return view('frontend.borchure');
})->name('borchure');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
Route::resource('auth', ADMIN\AuthController::class);
Route::get('/',[ADMIN\AuthController::class, 'index'])->name('login');
Route::get('/dashboard',[ADMIN\AuthController::class, 'create'])->name('dashbord');
Route::get('/logout',[ADMIN\AuthController::class, 'logout'])->name('logout');

Route::resource('register', ADMIN\AdminController::class);
Route::get('register/destroy/{id}',[ADMIN\AdminController::class, 'destroy'])->name('register.delete');
Route::POST('register/succes',[ADMIN\AdminController::class, 'succes'])->name('succes');
Route::POST('register/fail',[ADMIN\AdminController::class, 'fail'])->name('fail');
Route::GET('registers/cancle/{id}',[ADMIN\AdminController::class, 'cancle'])->name('cancle');
Route::GET('payment',[ADMIN\AdminController::class, 'payment'])->name('payment');
Route::GET('invoice/{id}',[ADMIN\AdminController::class, 'invoice'])->name('invoice');
Route::GET('registers/paid',[ADMIN\AdminController::class, 'index2'])->name('paid');
Route::GET('registers/pending',[ADMIN\AdminController::class, 'index3'])->name('pending');
});
Route::post('/user_check',[ADMIN\StudentController::class, 'login'])->name('login_store');
Route::get('/profile/{id}',[ADMIN\StudentController::class, 'profile'])->name('profile');
Route::POST('/password_change',[ADMIN\StudentController::class, 'password'])->name('password_change');
Route::POST('/event_update',[ADMIN\AdminController::class, 'update_event'])->name('update_event');
Route::Get('/logout',[ADMIN\StudentController::class, 'logout'])->name('logout');
Route::Get('/invoice',[ADMIN\StudentController::class, 'invoice'])->name('invoice');
Route::Get('/pdf',[ADMIN\StudentController::class, 'generatePDF'])->name('pdf');
Route::Get('/pdf/{id}',[ADMIN\StudentController::class, 'generatePDFID'])->name('pdf_id');
Route::Get('/event/{id}',[ADMIN\StudentController::class, 'participant'])->name('event');
;
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/terms&condition', function () {
    return view('frontend.trem');
})->name('tren');

Route::get('/cancel', function () {
    return view('frontend.cancel');
})->name('cancel');

Route::get('/privacy', function () {
    return view('frontend.privacy');
})->name('privacy');

Route::get('/refund', function () {
    return view('frontend.refund');
})->name('refund');