<?php

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



/** Post routes **/
http://localhost/once/public/question
Route::post('mylogin',['uses' =>'AdminController@mylogin', 'as' => 'mylogin']);

Route::post('myregister', ['uses' => 'AdminController@myregister', 'as' => 'myregister']);

Route::post('addcitedkpi', ['uses' => 'AdminController@addcitedkpi', 'as' => 'addcitedkpi']);

Route::post('addlecturernote', ['uses' => 'AdminController@addlecturernote', 'as' => 'addlecturernote']);

Route::post('addlecturernotelecturer', ['uses' => 'AdminController@addlecturernotelecturer', 'as' => 'addlecturernotelecturer']);

Route::post('addbookprocess', ['uses' => 'AdminController@addbookprocess', 'as' => 'addbookprocess']);
Route::post('addbookprocess2', ['uses' => 'AdminController@addbookprocess2', 'as' => 'addbookprocess2']);

Route::get('registerinside', ['uses' => 'AdminController@registerInsideForm', 'as' => 'registerinside']);
Route::post('registerinside', ['uses' => 'AdminController@registerInside', 'as' => 'registerInside']);

Route::get('logout',['uses' =>'AdminController@logout', 'as' => 'logout']);

Route::get('bicregister',['uses' =>'AdminController@registerBicsForm']);

Route::post('bics/',['uses' =>'AdminController@registerBics', 'as' => 'register.bics']);
Route::get('bic-dashboard/',['uses' =>'AdminController@bicDashboard'])->name('bicDashboard');
Route::get('change-password/',['uses' =>'AdminController@changePasswordPage'])->name('changePasswordPage');
Route::post('change-password/',['uses' =>'AdminController@changePassword']);
Route::get('/bic/certificate/view', 'AdminController@printCertificate')->name('printCertificate');
Route::get('/bic/certificate/', 'AdminController@viewCertificate')->name('viewCertificate');
Route::get('bic/posts',['uses' =>'AdminController@bicPosts'])->name('bicPosts');
Route::get('bic/posts/{post}/view',['uses' =>'AdminController@viewBicPost'])->name('viewBicPost');
Route::get('bic/posts/{post}/edit',['uses' =>'AdminController@editBicPostPage'])->name('editBicPost');
Route::put('bic/posts/{post}/edit',['uses' =>'AdminController@editBicPost']);
Route::get('bic/posts/create',['uses' =>'AdminController@createBicPostPage'])->name('createBicPost');
Route::post('bic/posts/create',['uses' =>'AdminController@createBicPost']);
Route::post('bic/posts/{post}/view/upload',['uses' =>'AdminController@uploadBicModule'])->name('uploadBicModule');
Route::post('bic/posts/{post}/view/comment',['uses' =>'AdminController@addFacilitatorComment'])->name('addFacilitatorComment');
Route::delete('bic/posts/{post}/delete',['uses' =>'AdminController@deleteBicPost'])->name('deleteBicPost');

Route::get('facilitator-dashboard/',['uses' =>'AdminController@facilitatorDashboard'])->name('facilitatorDashboard');
Route::get('facilitator/posts',['uses' =>'AdminController@posts'])->name('posts');
Route::get('facilitator/posts/{post}/view',['uses' =>'AdminController@viewPost'])->name('viewPost');
Route::get('facilitator/posts/{post}/edit',['uses' =>'AdminController@editPostPage'])->name('editPost');
Route::put('facilitator/posts/{post}/edit',['uses' =>'AdminController@editPost']);
Route::get('facilitator/posts/create',['uses' =>'AdminController@createPostPage'])->name('createPost');
Route::get('facilitator/certification/',['uses' =>'AdminController@certificationPage'])->name('certification');
Route::post('facilitator/certification/{bic}/issue',['uses' =>'AdminController@issueCertificate'])->name('issueCertificate');
Route::post('facilitator/posts/create',['uses' =>'AdminController@createPost']);
Route::post('facilitator/posts/{post}/view/upload',['uses' =>'AdminController@uploadModule'])->name('uploadModule');
Route::post('facilitator/posts/{post}/view/comment',['uses' =>'AdminController@addFacilitatorComment'])->name('addFacilitatorComment');
Route::delete('facilitator/posts/{post}/delete',['uses' =>'AdminController@deletePost'])->name('deletePost');

// Student Dashboard
Route::get('/student/dashboard',['uses' =>'StudentController@index'])->name('student.index');
Route::get('/student/profile',['uses' =>'StudentController@profile'])->name('student.profile');
Route::get('/student/profile/edit',['uses' =>'StudentController@editProfile'])->name('student.profile.edit');
Route::put('/student/profile/edit/',['uses' =>'StudentController@profileEdit']);
Route::get('/student/profile/documents/',['uses' =>'StudentController@documents'])->name('student.profile.documents');
Route::put('/student/profile/documents/',['uses' =>'StudentController@upload']);
Route::put('/student/profile/documents/portfolio/remove',['uses' =>'StudentController@removePortfolio'])->name('student.profile.remove.portfolio');
Route::put('/student/profile/documents/resume/remove',['uses' =>'StudentController@removeResume'])->name('student.profile.remove.resume');
Route::put('/student/profile/documents/publication1/remove',['uses' =>'StudentController@removePublication1'])->name('student.profile.remove.publication1');
Route::put('/student/profile/documents/publication2/remove',['uses' =>'StudentController@removePublication2'])->name('student.profile.remove.publication2');
Route::get('/student/courses/',['uses' =>'StudentController@courses'])->name('student.profile.courses');
Route::post('/student/courses/',['uses' =>'StudentController@coursesAdd']);
Route::put('/student/courses/{course}/edit',['uses' =>'StudentController@courseEdit'])->name('student.profile.course.edit');


Route::post('enteremailprocess',['uses' =>'AdminController@enteremailprocess', 'as' => 'enteremailprocess']);

Route::post('answer',['uses' =>'AdminController@securityanswer', 'as' => 'answer']);

Route::post('resetpassword', ['uses' => 'AdminController@resetpassword', 'as' => 'resetpassword']);

Route::post('borangpemetaan', ['uses' => 'AdminController@borangpemetaan', 'as' => 'borangpemetaan']);

Route::post('borangpemetaan/edit/{borangpemetaan}/', ['uses' => 'AdminController@edit_borangpemetaan', 'as' => 'edit-borangpemetaan']);

Route::post('borangpemetaan/delete/{borangpemetaan}/', ['uses' => 'AdminController@deleteborangpemetaan', 'as' => 'deleteborangpemetaan']);

Route::post('borangpenyaringan', ['uses' => 'AdminController@borangpenyaringan', 'as' => 'borangpenyaringan']);

Route::post('intech', ['uses' => 'AdminController@intech', 'as' => 'intech']);
Route::post('intechpro', ['uses' => 'AdminController@intechpro', 'as' => 'intechpro']);
Route::post('inventor', ['uses' => 'AdminController@inventor', 'as' => 'inventor']);

/** navigation routes **/






Route::get('/', function () {
    return view('index');
});

Route::get('home', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/mylogin', function () {
    return view('login2');
});


Route::get('/management', function () {
    return view('management');
});

Route::get('events', function () {
    return view('events');
});

Route::get('/event-single', function () {
    return view('event-single');
});

Route::get('/event-single2', function () {
    return view('event-single');
});

Route::get('/social', function () {
    return view('social');
});

Route::get('/broadcast', function () {
    return view('broadcast');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/commercial', function () {
    return view('commercial');
});

Route::get('/registersuccessful', function () {
    return view('registersuccessful');
});

Route::get('admin_dashboard', function () {
    return view('dashboard.admin-dashboard');
});

Route::get('lecturernote', function () {
    return view('dashboard.lecturernote');
});

Route::get('lecturernote', ['uses' => 'AdminController@getlecturer', 'as' => 'lecturernote']);

Route::get('admin', ['uses' => 'AdminController@getcitied', 'as' => 'admin']);

Route::get('admin_student_list', function () {
    return view('dashboard.admin-student-list');
});

Route::get('addlecturernote', function () {
    return view('dashboard.addlecturernote');
});

Route::get('addlecturernotelecturer', function () {
    return view('dashboard.addlecturernotelecturer');
});

Route::get('addcitedkpi', function () {
    return view('dashboard.addcitedkpi');
});

Route::get('intech', function () {
    return view('intech');
})->name('intech');

Route::get('intechpro', function () {
    return view('intechpro');
})->name('intechpro');

Route::get('inventor', function () {
    return view('inventor');
})->name('inventor');



Route::get('networking', function () {
    return view('networking');
});

Route::get('question', function () {
    return view('question');
});

Route::get('resetpassword', function () {
    return view('resetpassword');
});

Route::get('enteremail', function () {
    return view('enteremail');
});

Route::get('add_student_dashboard', function () {
    return view('dashboard.admin-add-student');
});

Route::get('admin_add_student', function () {
    return view('dashboard.admin-add-student');
});

Route::get('admin_student_dashboard', function () {
    return view('dashboard.admin-student-list');
});

Route::get('lecturerdashboard', function () {
    return view('dashboard.lecturer-dashboard');
});

Route::get('admin_add_subject', function () {
    return view('dashboard.admin-add-subject');
});

Route::get('admin_add_class', function () {
    return view('dashboard.admin-add-class');
});

Route::get('admin_student_list', function () {
    return view('dashboard.admin-student-list');
});

Route::get('admin_add_class', function () {
    return view('dashboard.admin-add-class');
});

Route::get('admin_add_section', function () {
    return view('dashboard.admin-add-section');
});

Route::get('admin_add_subject', function () {
    return view('dashboard.admin-add-subject');
});

Route::get('student_attendence_detailed', function () {
    return view('dashboard.student-attendence-detailed');
});

Route::get('student_attendence', function () {
    return view('dashboard.student-attendence');
});

Route::get('student_dashboard', function () {
    return view('dashboard.student-dashboard');
});

Route::get('admin_add_teacher', function () {
    return view('dashboard.admin-add-teacher');
});

Route::get('/resetsuccessful', function () {
    return view('resetsuccessful');
});

Route::get('addbook', function () {
    return view('dashboard.addbook');
});

Route::get('addbooklecturer', function () {
    return view('dashboard.addbooklecturer');
});

Route::get('lecturernotelecturer', function () {
    return view('dashboard.lecturernotelecturer');
});

Route::get('lecturerclasstimetable', function () {
    return view('dashboard.lecturer-class-timetable');
});

Route::get('addclasstimetable', function () {
    return view('dashboard.add-class-timetable');
});

Route::get('editclasstimetable', function () {
    return view('dashboard.edit-class-timetable');
});

// Route::get('/borangpemetaan', function () {
//     return view('dashboard.borangpemetaan');
// });

Route::get('/borangpemetaan', ['uses' => 'AdminController@borangpemetaaan', 'as' => 'borangpemetaan']);

Route::get('/ctes', ['uses' => 'AdminController@ctes', 'as' => 'ctes']);

Route::post('/ctes', ['uses' => 'AdminController@addctes', 'as' => 'ctes']);

Route::get('/viewctes', ['uses' => 'AdminController@viewctes', 'as' => 'viewctes']);

Route::post('/ctes/edit/{ctes}/', ['uses' => 'AdminController@editctes', 'as' => 'edit-ctes']);

Route::post('/ctes/delete/{ctes}/', ['uses' => 'AdminController@deletectes', 'as' => 'delete-ctes']);

Route::get('/viewborangpemetaan', ['uses' => 'AdminController@viewborangpemetaan', 'as' => 'viewborangpemetaan']);

Route::get('/borangpenyaringan', function () {
    return view('dashboard.borangpenyaringan');
});

Route::get('/viewborangpenyaringan', function () {
    return view('dashboard.viewborangpenyaringan');
});

Route::get('/borang', function () {
    return view('dashboard.borang');
});

Route::get('/admindocument', function () {
    return view('dashboard.admindocument');
});

Route::get('team', function () {
    return view('team');
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('inside2020', function () {
    return view('inside2020');
});

Route::get('aboutinside', function () {
    return view('aboutinside');
});

Route::get('galleryinside', function () {
    return view('galleryinside');
});

Route::get('terms', function () {
    return view('terms');
});
/*Route::get('stationhome', function () {
    return view('station.index');
});
*/
Route::get('stationhome', ['uses' => 'AdminController@getstationhome', 'as' => 'stationhome']);

Route::get('lecturernotelecturer', ['uses' => 'AdminController@getlecturer2', 'as' => 'lecturernotelecturer']);

Route::get('/updateapp', function()
{
    \Artisan::call('dump-autoload');
    echo 'dump-autoload complete';
});
