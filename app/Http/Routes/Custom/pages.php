<?php

	use Illuminate\Support\Facades\App;
	use App\Models\Admin\Pages\Contents;

	Route::get('/{page}',['as'=>'pages',function($page) {

	    $page = Contents::where('slug',$page)->first();
	    if(isset($page))
	        return view('pages.template',['page'=>$page]);

	    App::abort(404);

	}]);

	Route::get('/', function() {
		return view('base');
	});