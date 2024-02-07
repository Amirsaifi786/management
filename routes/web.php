<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\WhychooseusController;
use App\Models\User;

Route::get('/', function () { return view('layout.master');});
Route::get('welcome', function () { return view('welcome');});
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/submit-form',[AuthController::class,'formstore'])->name('form');

Route::post('/blogstore', [BlogController::class,'store'])->name('create');
Route::get('furniture',[FurnitureController::class,'furnitureindex'])->name('furniture');

Route::get('blog', function () { return view('site.blog');})->name('addblog');
Route::post('product', [BlogController::class,'store'])->name('save');
Route::get('bloglist',[BlogController::class,'blogdata'])->name('blogdata');
Route::get('product', function(){return view('site.product');})->name('editor');
Route::get('products', [BlogController::class,'index'])->name('saves');
Route::get('edit-student/{id}', [BlogController::class, 'edit'])->name('blogedit');
Route::delete('delete-product/{id}', [BlogController::class, 'destroy'])->name('delete-product');


Route::resource('products-ajax-crud', ItemsController::class);

Route::get('/employee', [EmployeeController::class, 'index'])->name('employlist');
Route::post('/store', [EmployeeController::class, 'store'])->name('store');
Route::get('/fetchall', [EmployeeController::class, 'fetchAll'])->name('fetchAll');
Route::delete('/delete', [EmployeeController::class, 'delete'])->name('delete');
Route::get('/edit', [EmployeeController::class, 'edit'])->name('edit');
Route::post('/update', [EmployeeController::class, 'update'])->name('update');


//route for furniture management
// Route::get('/furnitures', function () { return view('furniture.addfurniture');});
Route::get('/femployee', [FurnitureController::class, 'index'])->name('furnitutelist');
Route::post('/fstore', [FurnitureController::class, 'store'])->name('fstore');
Route::get('/ffetchall', [FurnitureController::class, 'fetchAll'])->name('ffetchAll');
Route::delete('/fdelete', [FurnitureController::class, 'delete'])->name('fdelete');
Route::get('/fedit', [FurnitureController::class, 'edit'])->name('fedit');
Route::post('/fupdate', [FurnitureController::class, 'update'])->name('fupdate');

Route::get('/testimonial', [TestimonialsController::class, 'index'])->name('testimoniallist');
Route::post('/tstore', [TestimonialsController::class, 'store'])->name('tstore');
Route::get('/tfetchall', [TestimonialsController::class, 'fetchAll'])->name('tfetchAll');
Route::delete('/tdelete', [TestimonialsController::class, 'delete'])->name('tdelete');
Route::get('/tedit', [TestimonialsController::class, 'edit'])->name('tedit');
Route::post('/tupdate', [TestimonialsController::class, 'update'])->name('tupdate');


Route::get('/whychooseus', [WhychooseusController::class, 'index'])->name('whychooseuslist');
Route::post('/wstore', [WhychooseusController::class, 'store'])->name('wstore');
Route::get('/wfetchall', [WhychooseusController::class, 'fetchAll'])->name('wfetchAll');
Route::delete('/wdelete', [WhychooseusController::class, 'delete'])->name('wdelete');
Route::get('/wedit', [WhychooseusController::class, 'edit'])->name('wedit');
Route::post('/wupdate', [WhychooseusController::class, 'update'])->name('wupdate');




















// Route::get('password',function () {//update admin password code
//     // $user = User::find('1');
//     // $newPassword = bcrypt('newlaravel');
//     // $user->password = $newPassword; 
//     // $user->save(); // Save the changes    
// });

// Route::get('send-mail-to-users', [BlogController::class,'sendEmail']);
// Route::get('resume', function(){
//     return view('mails.welcome_mail');
// });