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

Route::get('/', function () {
    return view('welcome');
});

/*
$html = <<<EOF
<html>
 <head>
 <title>HELLO</title>
<style>
 body {font-size: 16pt; color:#999; }
 h1 { font-size:100pt; text-align:right; color:#eee;
     margin-40px 0px -50px 0px;}
 </style>
 </head>
 <body>
    <h1>HELLO</h1>
       <p>This is sample page.</p>
       <p>これは、サンプルで作ったページです。</p>
  </body>
</html>
EOF;

Route::get('hello',function () use ($html){
	return $html;
}) */

/*
use App\Http\Middleware\ookawamiddleware;
use App\Http\Middleware\ookawa1middle2;
 */
Route::get('person','PersonController@index');

Route::get('ookawa1/querydel','mysql@querydel');
Route::post('ookawa1/querydel','mysql@queryremove');


Route::get('ookawa1/queryedit','mysql@queryedit');
Route::post('ookawa1/queryedit','mysql@queryupdate');


Route::get('ookawa1/queryadd','mysql@queryadd');
Route::post('ookawa1/queryadd','mysql@querycreate');


Route::get('ookawa1/offsetlimit','mysql@offsetlimit');

Route::get('ookawa1/whereraw','mysql@whereraw');

Route::get('ookawa1/queryminmax','mysql@queryminmax');

Route::get('ookawa1/querylike','mysql@querylike');

Route::get('ookawa1/queryshow','mysql@queryshow');

Route::get('ookawa1/query1','mysql@query1');

Route::get('ookawa1/del','mysql@del');
Route::post('ookawa1/del','mysql@remove');


Route::get('ookawa1/edit','mysql@edit');
Route::post('ookawa1/edit','mysql@update');

Route::get('ookawa1/add','mysql@add');
Route::post('ookawa1/add','mysql@create');


Route::get('ookawa1/mysql1','mysql@mysql1');
Route::get('ookawa1/parameter','mysql@parameter');

Route::get('ookawa1/vali5','vali2Controller@vali5');
Route::post('ookawa1/vali5','vali2Controller@vali5post');

Route::get('ookawa1/vali4','valiController@vali4');
Route::post('ookawa1/vali4','valiController@vali4post');

Route::get('ookawa1/vali3','valiController@vali3');
Route::post('ookawa1/vali3','valiController@vali3post');

Route::get('ookawa1/vali2','ookawa1Controller@validation2');
Route::post('ookawa1/vali2','ookawa1Controller@validation2post');

Route::get('ookawa1/vali','ookawa1Controller@validation');
Route::post('ookawa1/vali','ookawa1Controller@validationpost');

Route::get('ookawa1/midle2','ookawa1Controller@midle2')
->middleware('ookawa');
/*->middleware(ookawa1middle2::class);*/


Route::get('ookawa1/midle','ookawa1Controller@midle')
->middleware('ookawa');
/*->middleware(ookawamiddleware::class);*/
Route::get('ookawa/midle','ookawaController@midle');

Route::get('ookawa1/main','ookawa1Controller@ookawamain');

Route::get('ookawa/for','ookawaController@forblade');
Route::get('ookawa/foreachs','ookawaController@foreachs');

Route::get('ookawa/if','ookawaController@ifblade');
Route::post('ookawa/if','ookawaController@ifpost');


Route::get('ookawa/form1','ookawaController@form1');
Route::post('ookawa/form1','ookawaController@formpost1');

Route::get('ookawa/form','ookawaController@form');
Route::post('ookawa/form','ookawaController@formpost');

Route::get('ookawa/fukusu','ookawaController@fukusu');
Route::get('midtest','midtestController@index');
Route::get('mouse',function(){
	return view('mouse.index');
});
Route::get('test','testController@index');
Route::get('test1','test1Controller@index');
Route::get('rensyu9','rensyu9@index');
Route::get('rensyu6','rensyu6@index');//練習６
Route::get('first/{id?}/{pass?}','first@index');
Route::get('first/{id?}/{pass?}','first@index');
Route::get('syamu1/{id?}','syamu1@index');
Route::get('egg','egg@index');/*eggは動かない*/
Route::get('syamu','syamu@index');
Route::get('cat','catcontroller@index');
Route::get('dog','dog');
Route::get('bye','goodbye@index');
Route::get('bye/other','goodbye@other');
Route::get('bye1/{id?}/{pass?}','goodbye1@index');
Route::get('bye2','goodbye2@index');
Route::get('rensyu','rensyu@index');//練習用のクラス
Route::get('rensyu2/{id?}/{pass?}','rensyu2@index');//練習用のクラス２
Route::get('rensyu3/{syamu?}/{syamugame?}','rensyu3@index');//練習用のクラス３
Route::get('layouts', 'layoutsController@index');
Route::get('layouts2', 'layouts2Controller@index');
Route::get('rensyu4','rensyu4@index');//練習用のクラス４
Route::get('rensyu4/other','rensyu4@other');//練習用のクラス４
Route::get('rensyu5','rensyu5@index');//練習５
Route::get('rensyu7','rensyu7@index');//練習７
Route::post('rensyu7','rensyu7@post');//練習７
Route::get('rensyu8','rensyu8@index');
Route::post('rensyu8','rensyu8@post');
Route::get('rensyu9','rensyu9@index');
Route::post('rensyu9','rensyu9@post');
Route::get('rensyu10','rensyu10@index');
Route::post('rensyu10','rensyu10@post');
Route::get('rensyu11','rensyu11@index');
Route::post('rensyu11','rensyu11@post');
Route::get('black','HelloController@index');
Route::get('blue/{id?}/{pass?}' ,'HelloController@index2');
Route::get('bladetest2','bladetest2@index');
Route::post('bladetest2','bladetest2@post');
Route::get('bladetest','bladetest@index');
Route::post('bladetest','bladetest@post');

