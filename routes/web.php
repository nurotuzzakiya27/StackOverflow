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



//raw template keseluruhan
Route::get('/master', function () {
    return view('layouts/master');
});


//template login
Route::get('/login', function () {
    return view('login');
});

//template register
Route::get('/register2', function () {
    return view('register');
});

//template tabel
Route::get('/table', function () {
    return view('table');
});

//template form
Route::get('/form', function () {
    return view('form');
});


Auth::routes();
Route::group(['middleware' => 'auth'], function(){
	// Route::get('/', function () {
	//     return view('home');
	// });
	Route::get('/', 'HomeController@index')->name('home'); 	// Dashboard
	Route::get('/home', 'HomeController@index')->name('home'); 	// Dashboard
	Route::get('/erd', 'HomeController@erd')->name('erd'); 	// Dashboard
	Route::get('/feed', 'QuestionController@index')->name('feed');			// Daftar Pertanyaan

	//CRUD Pertanyaan
	Route::get('/question/detail/{id}', 'QuestionController@show')->name('questionDetail');	// Detail Pertanyaan + daftar jawaban
	Route::get('/question/create', 'QuestionController@create')->name('questioncreate'); // Create questions
	Route::post('/question/save', 'QuestionController@store')->name('questionStore'); //save answer 
	Route::get('/question/upvote/{q_id}', 'QuestionController@upvote')->name('questionVote'); //upvote question 
	Route::get('/question/downvote/{q_id}', 'QuestionController@downvote')->name('questionVoteD'); //downvote question 
	Route::get('/question/delete/{id}', 'QuestionController@delete')->name('questionDelete');	// Delete question

	//CRUD Answer
	Route::get('/answer/create/{id}', 'AnswerController@create'); // Create answer
	Route::get('/answer/delete/{q_id}/{ans_id}', 'AnswerController@delete'); // Delete answer
	Route::get('/answer/edit/{q_id}/{ans_id}', 'AnswerController@edit')->name('jawabanEdit');
	Route::put('/answer/update/{q_id}/{ans_id}', 'AnswerController@update')->name('jawabanUpdate');
	Route::post('/answer/{id}', 'AnswerController@store')->name('answerStore'); //save answer 
	Route::get('/answer/favorite/{q_id}/{ans_id}', 'AnswerController@favorite')->name('answerFav'); //save answer 
	Route::get('/answer/upvote/{q_id}/{ans_id}', 'AnswerController@upvote')->name('answerVote'); //upvote answer 
	Route::get('/answer/downvote/{q_id}/{ans_id}', 'AnswerController@downvote')->name('answerVoteD'); //downvote answer 

	//CRUD Komentar
	Route::get('/comment/create/{q_id}', 'CommentController@create')->name('commentcreate'); // Create questions
	Route::get('/comment/create/{q_id}/{id}', 'CommentController@creates')->name('commentcreates'); // Create questions
	Route::post('/comment/save/{q_id}', 'CommentController@store')->name('commentStore'); //save answer 
	Route::post('/comment/save/{q_id}/{id}', 'CommentController@stores')->name('commentStores'); //save answer 


});
