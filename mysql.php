<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class mysql extends Controller
{
	//testテーブルをすべて表示するメソット=mysql.blade.php
	public function mysql1(Request $request)
	{
		$items = DB::select('select * from test');
		return view('ookawa1.mysql',['items'=>$items]);
	}

	//parameterメソットはクエリ文字列でidパラメーターで検索できる=parameter.blade.php
	public function parameter(Request $request)
	{
		if(isset($request->id))
		{
			$param = ['id' => $request->id];
			$items = DB::select('select *from test where id = :id',$param);

		}elseif(isset($request->age)){

			$param = ['age' => $request->age];
                        $items = DB::select('select *from test where age = :age',$param);

		}else{
			$items = DB::select('select * from test');
		}

		return view('ookawa1.parameter',['items'=>$items]);

	}

	//addは表示のみ、addとcreateメソットは２つでひとつ、add.blade.php
	public function add()
	{
		return view('ookawa1.add');
	}
	//createメソットは情報を実際にinsertするメソット、add.blade.php
	public function create(Request $request)
	{
		$param = [
			'name'=>$request->name,
			'come'=>$request->come,
			'age'=>$request->age,
		];
		DB::insert('insert into test (name,come,age) values(:name, :come, :age)',$param);
		return redirect('/ookawa1/add');
	}

	/*書き換える処理を見つけ出すメソッド*/
        public function edit(Request $request)
	{
		$param = ['id' => $request->id];
		$item = DB::select('select * from test where id = :id',$param);
		return view('ookawa1.edit',['form' => $item[0]]);

	}
	/*書き換える処理*/
	public function update(Request $request)
	{
		$param = [
			'id' => $request->id,
			'name'=>$request->name,
			'come'=>$request->come,
			'age'=>$request->age,
		];

		DB::update('update test set name =:name, come = :come,age = :age where id = :id',$param);
		return redirect('/ookawa1/mysql1');
	}
        /*削除をするやつを探すメソット*/ 
	public function del(Request $request)
	{
		$param = ['id'=>$request->id];
		$item = DB::select('select * from test where id = :id',$param);
		return view('ookawa1.del',['form' => $item[0]]);
	}
	/*実際に削除するメソット*/
	public function remove(Request $request)
	{
		$param = ['id'=>$request->id];
		DB::delete('delete from test where id = :id',$param);
		return redirect('/ookawa1/mysql1');
	}

	public function query1(Request $request)
	{
		$items = DB::table('test')->get();
		return view('ookawa1.query1',['items'=>$items]);
	}

	public function queryshow(Request $request)
	{
		$id = $request->id;
		$items = DB::table('test')->where('id','<=',$id)->get();
		return view('ookawa1.queryshow',['items'=>$items]);
	}

	public function querylike(Request $request)
        {
		$name = $request->name;
		$items = DB::table('test')
			->where('name','like', '%' . $name . '%')
			->orWhere('come','like','%'.$name .'%')
			->get();
		return view('ookawa1.querylike',['items' => $items]);

	}
         public function queryminmax(Request $request)
	 {
		 $min = $request->min;
		 $max = $request->max;
		 $items = DB::table('test')
			 ->whereRaw('age >= ? and age <= ?',[$min,$max])->get();
		 return view('ookawa1.queryminmax',['items' => $items]);
	 }
	//データーベースを昇順、降順をするメソット
	public function whereraw(Request $request)
	{
		$items = DB::table('test')->orderBy('age','asc')->get();
		
		//$items = DB::table('test')->orderBy('age','desc')->get();
		//↑降順


		return view('ookawa1.whereraw',['items'=>$items]);
	}

        //3つのカラムしか表示させないメソット 
	public function offsetlimit(Request $request)
	{
		$page = $request->page;
		$items = DB::table('test')
		->offset($page * 3)
		->limit(3)
		->get();
		return view('ookawa1.offsetlimit',['items'=>$items]);
	}


	public function queryadd(Request $request)
	{
		return view('ookawa1.queryadd');
	}
	public function querycreate(Request $request)
	{
		$param = [

			'name' => $request->name,
			'come' => $request->come,
			'age'  => $request->age,
		];
		DB::table('test')->insert($param);
		return redirect('/ookawa1/mysql1');
	}

	public function queryedit(Request $request)
	{
		$item = DB::table('test')
			->where('id',$request->id)->first();
		return view('ookawa1.queryedit',['form'=>$item]);
	
	}

	public function queryupdate(Request $request)
	{
		$param = [
			'name'=>$request->name,
			'come'=>$request->come,
			'age'=>$request->age,
		];
		DB::table('test')
			->where('id',$request->id)
			->update($param); 
		   return redirect('/ookawa1/mysql1');
	}

	public function querydel(Request $request)
	{
		$item = DB::table('test')
			->where('id',$request->id)->first();
		return view('ookawa1.querydel',['form'=>$item]);
	}

	public function queryremove(Request $request)
	{
		DB::table('test')
			->where('id',$request->id)->delete();
		 return redirect('/ookawa1/mysql1');

	}



}
