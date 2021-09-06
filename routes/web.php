<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasteringController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserprofileController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserEnrollmentController;
use App\Http\Controllers\ClassroomCourseController;


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


Route::get('/', [MasteringController::class,'index'])->name('home');

//Contact us Route
Route::get('/contact_us', [ContactUsController::class,'contact'])->name('contact');
Route::get('/about_us', [AboutController::class,'index'])->name('about');
Route::get('/events', [EventController::class,'index'])->name('event');
Route::get('/event_details', [EventController::class,'event_details'])->name('event_details');
Route::get('/faqs', [FaqController::class,'index'])->name('faq');
Route::get('/errors', [ErrorController::class,'index'])->name('error');
Route::get('/courses', [FrontendController::class,'index'])->name('courses');
Route::get('/course_details', [FrontendController::class,'course_details'])->name('course_details');
//Route::get('/course_details/{id}', [FrontendController::class,'course_details'])->name('course_details');
Route::get('/user_profile', [UserProfileController::class,'user_profile'])->name('user_profile');
Route::get('/blogs', [BlogsController::class,'index'])->name('blogs');
Route::get('/blogs_details', [BlogsController::class,'blogs_details'])->name('blogs_details');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home-user');

//admin routes
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin.home')->
middleware('is_admin');

//admin main category routes
Route::get('/admin/home/main_category/add', [MainCategoryController::class, 'add'])->name('addmain-category')->
middleware('is_admin');
Route::post('/admin/home/main_category/store',[MainCategoryController::class,'storeMCategory'])->name('store-mcategory')->
middleware('is_admin');
Route::get('admin/home/main_category/edit/{id}',[MainCategoryController::class,'editmCategory'])->middleware('is_admin');
Route::post('admin/home/main_category/update',[MainCategoryController::class,'updatemCategory'])->name('update-mcategory')->middleware('is_admin');
Route::get('admin/home/main_category/delete/{id}',[MainCategoryController::class,'deleteMCategory'])->middleware('is_admin');

//user routes
Route::get('admin/home/users',[UserController::class,'List'])->middleware('is_admin')->name('user-lists');
Route::get('admin/home/users/delete/{id}',[UserController::class,'deleteUser'])->middleware('is_admin');

//course category routes
Route::get('/admin/home/course_category/manage', [App\Http\Controllers\CourseCategoryController::class, 'Manage'])->name('managecourse-category')->
middleware('is_admin');
Route::post('/admin/home/course_category/store',[CourseCategoryController::class,'storeCourseCategory'])->name('store-maincategory')->
middleware('is_admin');
Route::get('admin/home/course_category/edit/{id}',[CourseCategoryController::class,'editCourseCategory'])->middleware('is_admin');
Route::post('admin/home/course_category/update',[CourseCategoryController::class,'updateCourseCategory'])->name('update-coursecategory')->middleware('is_admin');
Route::get('admin/home/course_category/delete/{id}',[CourseCategoryController::class,'deleteCourseCategory'])->middleware('is_admin');


//admin add e-learning course routes
Route::get('/admin/home/courses/manage', [CourseController::class, 'Manage'])->name('manage-course')->
middleware('is_admin');
Route::post('/admin/home/courses/store', [CourseController::class, 'StoreCourse'])->name('store-course')->
middleware('is_admin');
Route::get('admin/home/courses/edit/{id}',[CourseController::class,'editCourse'])->middleware('is_admin');
Route::post('admin/home/courses/update',[CourseController::class,'updateCourse'])->name('update-course')->middleware('is_admin');
Route::get('admin/home/courses/delete/{id}',[CourseController::class,'deleteCourse'])->middleware('is_admin');
Route::get('admin/home/courses/course_details/{id}',[CourseController::class,'CourseDetails'])->middleware('is_admin');
Route::get('admin/home/courses/course_details/course_info/{id}',[CourseController::class,'CourseInfo'])->middleware('is_admin');
Route::get('admin/home/courses/course_details/course_curricullum/{id}',[CourseController::class,'CourseCurricullum'])->middleware('is_admin');
Route::get('admin/home/courses/course_overviews/{id}',[CourseController::class,'CourseOverview'])->middleware('is_admin');

Route::post('admin/home/courses/course_details/store',[CourseController::class,'StoreCourseDetails'])->name('store-course-details')->middleware('is_admin');

Route::get('admin/home/course_details/{id}',[CourseController::class,'course_details_frontend']);
Route::get('admin/home/course_details/sections/{id}',[CourseController::class,'Section'])->middleware('is_admin');
Route::post('admin/home/courses/course_details/sections/store',[CourseController::class,'StoreSection'])->name('store-section')->middleware('is_admin');
Route::get('admin/home/course_details/sections/edit/{id}',[CourseController::class,'editSection'])->middleware('is_admin');
Route::post('admin/home/course_details/sections/update',[CourseController::class,'updateSection'])->name('update-section')->middleware('is_admin');
Route::get('admin/home/course_details/sections/delete/{id}',[CourseController::class,'deleteSection'])->middleware('is_admin');
Route::post('admin/home/courses/course_details/sections/lessons/store',[CourseController::class,'StoreLesson'])->name('store-lesson')->middleware('is_admin');

Route::get('admin/home/course_details/view/{id}',[UserEnrollmentController::class,'index']);
//Route::get('users/home/course_details/view/{id}',[CourseController::class,'index']);

//admin add classroom course routes
Route::get('/admin/home/e-learning/courses/manage', [ClassroomCourseController::class, 'Manage'])->name('manage-classroom-course')->
middleware('is_admin');
Route::post('/admin/home/e-learning/courses/store', [ClassroomCourseController::class, 'StoreCourse'])->name('store-classroom-course')->
middleware('is_admin');
Route::get('admin/home/e-learning/courses/edit/{id}',[ClassroomCourseController::class,'editCourse'])->middleware('is_admin');
Route::post('admin/home/e-learning/courses/update',[ClassroomCourseController::class,'updateCourse'])->name('update-classroom-course')->middleware('is_admin');
Route::get('admin/home/e-learning/courses/delete/{id}',[ClassroomCourseController::class,'deleteCourse'])->middleware('is_admin');
