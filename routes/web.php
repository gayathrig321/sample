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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

/*Route::post('test',function(Request $request){
	$test = App\test::create($request->input());
	return response()->json($test); 
});*/
Route::post('test',function(Request $request){

//$this->_type = $request->input('type');
	//$test = App\Test::create($request->input());
	$product = DB::select(DB::raw("select * from products where name='tytyt' ")); //select
	//$data = DB::table('products')->where('id', '2')->first(); //using where
	
	//$product1 = DB::insert('insert into products (name, details) values (?, ?)',[$request->name,$request->details]); 
	//$product1 = DB::update('insert into products (name, details) values (?, ?)',[$request->name,$request->details]); 
	$product1 = DB::table('products')
            ->where('id', 4)
            ->update(['name' => $request->name ]);


	//$data = Request::all(); //fetch posted objects from json
	
	return response()->json($product1);
});

        Route::post('my_products',function(Request $request){
    $product = App\Product::create($request->input());
    return response()->json($product);
});