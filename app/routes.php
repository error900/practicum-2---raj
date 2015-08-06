<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
	Main Routes
*/

Route::get('/', function()
{
	$productCount = Product::count();
		if ($productCount >= 1) {
			if ($productCount > 9) {
				$hitCount = Product::where('hits', '>', 10)->count();
					if ($hitCount >= 9) {
						$Product = Product::where('hits', '>', 10)->take(9)->get();
						return View::make('Pages/index-home', compact('Product'));
					}
					else {
						$Product = Product::all()->take(9);
						return View::make('Pages/index-home', compact('Product'));
					}
			}
			else {
				$Product = Product::all()->take(9);
				return View::make('Pages/index-home', compact('Product'));
			}
		}
		else {
			Session::flash('message-products', 'Products is currently empty.');
			$Product = Product::all()->take(9);
			return View::make('Pages/index-home', compact('Product'));
		}
});

Route::get('home', function()
{
	$productCount = Product::count();
		if ($productCount >= 1) {
			if ($productCount > 9) {
				$hitCount = Product::where('hits', '>', 10)->count();
					if ($hitCount >= 9) {
						$Product = Product::where('hits', '>', 10)->take(9)->get();
						return View::make('Pages/index-home', compact('Product'));
					}
					else {
						$Product = Product::all()->take(9);
						return View::make('Pages/index-home', compact('Product'));
					}
			}
			else {
				$Product = Product::all()->take(9);
				return View::make('Pages/index-home', compact('Product'));
			}
		}
		else {
			Session::flash('message-products', 'Products is currently empty.');
			$Product = Product::all()->take(9);
			return View::make('Pages/index-home', compact('Product'));
		}
});

Route::get('about-us', function()
{
	return View::make('Pages/about-us');
});

Route::get('services-page', function()
{
	return View::make('Pages/services-page');
});

Route::get('contact-page', function()
{
	return View::make('Pages/contact-page');
});

Route::get('career-page', function()
{
	return View::make('Pages/career-page');
});

Route::get('products-detailed', function()
{
	$productCount = Product::count();
		if ($productCount >= 1) {
			$Product = Product::paginate(5);
			return View::make('Pages/products-detailed', compact('Product'));
		}
		else {
			Session::flash('message-products', 'Products is currently empty.');
			$Product = Product::paginate(5);
			return View::make('Pages/products-detailed', compact('Product'));
		}
});

Route::get('products-grid', function()
{
	$productCount = Product::count();
		if ($productCount >= 1) {
			$Product = Product::paginate(10);
			return View::make('Pages/products-grid', compact('Product'));
		}
		else {
			Session::flash('message-products', 'Products is currently empty.');
			$Product = Product::paginate(10);
			return View::make('Pages/products-grid', compact('Product'));
		}
});

Route::get('products-gallery', function()
{
	$productCount = Product::count();
		if ($productCount >= 1) {
			$Product = Product::paginate(20);
			return View::make('Pages/products-gallery', compact('Product'));
		}
		else {
			Session::flash('message-products', 'Products is currently empty.');
			$Product = Product::paginate(20);
			return View::make('Pages/products-gallery', compact('Product'));
		}
});

Route::get('product-item-{id}', function($id)
{
    $Product = Product::find($id);
    return View::make('Pages.product-item-', compact('Product'));
});

Route::get('product-compare', function()
{
	$content = Cart::content();
	$totalItems = Cart::count(false);
	return View::make('Pages/product-compare', compact('content','totalItems'));
});

Route::get('product-get-quote', function()
{
	$content = Cart::content();
	$totalItems = Cart::count(false);
		if ($totalItems >= 1) {
			return View::make('Pages/product-get-quote', compact('content','totalItems'));
		}
		else {
		Session::flash('message-cart', 'Compare list is empty! You need to add some products to the list first!');
        return Redirect::to('product-compare');
		}
});

/*
	Services Page
*/

Route::get('information-technology', function()
{
	return View::make('Pages/information-technology');
});

Route::get('imaging-solutions', function()
{
	return View::make('Pages/imaging-solutions');
});

Route::get('two-way-radio-communication', function()
{
	return View::make('Pages/two-way-radio-communication');
});

Route::get('security-and-surveillance', function()
{
	return View::make('Pages/security-and-surveillance');
});

Route::get('renewable-energy', function()
{
	return View::make('Pages/renewable-energy');
});

Route::get('service-get-quote/Software_Development_&_Support', function()
{
	$Service = "Software_Development_&_Support";
	$Service_Spaces = str_replace('_', ' ', $Service);
	return View::make('Pages/service-get-quote', compact('Service','Service_Spaces'));
});

Route::get('service-get-quote/Mainframe_Support', function()
{
	$Service = "Mainframe_Support";
	$Service_Spaces = str_replace('_', ' ', $Service);
	return View::make('Pages/service-get-quote', compact('Service','Service_Spaces'));
});

Route::get('service-get-quote/Server_Support', function()
{
	$Service = "Server_Support";
	$Service_Spaces = str_replace('_', ' ', $Service);
	return View::make('Pages/service-get-quote', compact('Service','Service_Spaces'));
});

Route::get('service-get-quote/Network_Security_Support', function()
{
	$Service = "Network_Security_Support";
	$Service_Spaces = str_replace('_', ' ', $Service);
	return View::make('Pages/service-get-quote', compact('Service','Service_Spaces'));
});

Route::get('service-get-quote/Imaging_Solutions', function()
{
	$Service = "Imaging_Solutions";
	$Service_Spaces = str_replace('_', ' ', $Service);
	return View::make('Pages/service-get-quote', compact('Service','Service_Spaces'));
});

Route::get('service-get-quote/Two_Way_Radio_Service_&_Repairs', function()
{
	$Service = "Two_Way_Radio_Service_&_Repairs";
	$Service_Spaces = str_replace('_', ' ', $Service);
	return View::make('Pages/service-get-quote', compact('Service','Service_Spaces'));
});

Route::get('service-get-quote/Security_&_Surveillance', function()
{
	$Service = "Security_&_Surveillance";
	$Service_Spaces = str_replace('_', ' ', $Service);
	return View::make('Pages/service-get-quote', compact('Service','Service_Spaces'));
});

Route::get('service-get-quote/Solar_Power_Services', function()
{
	$Service = "Solar_Power_Services";
	$Service_Spaces = str_replace('_', ' ', $Service);
	return View::make('Pages/service-get-quote', compact('Service','Service_Spaces'));
});

Route::post('service_get_quote/{Service}', array(
    'as' => 'service_get_quote',
	'before' => 'csrf',
    'uses' => 'ServiceController@service_get_quote'
    )
);

/*
	Shopping Cart
*/

Route::get('addToCart{id}', array(
    'as' => 'addToCart',
    'uses' => 'CartController@add'
    )
);

Route::get('clearAll', array(
    'as' => 'clearAll',
    'uses' => 'CartController@clear'
    )
);

Route::get('remove{rowid}', array(
    'as' => 'remove',
    'uses' => 'CartController@remove'
    )
);

Route::post('get_quantity{rowid}', array(
    'as' => 'get_quantity',
	'before' => 'csrf',
    'uses' => 'CartController@get_quantity'
    )
);

Route::post('get_quote', array(
    'as' => 'get_quote',
	'before' => 'csrf',
    'uses' => 'CartController@get_quote'
    )
);

/*
	Career & Contact Page
*/

Route::post('career_inquire', array(
    'as' => 'career_inquire',
	'before' => 'csrf',
    'uses' => 'ContactController@career_inquire'
    )
);

Route::post('contact_inquire', array(
    'as' => 'contact_inquire',
	'before' => 'csrf',
    'uses' => 'ContactController@contact_inquire'
    )
);

/*
	Current Logged User
*/

Route::get('dashboard', array(
    'as' => 'dashboard',
    'before' => 'basicAuth|hasPermissions:user.create',
    'uses' => 'FeatureController@getIndex'
    )
);

/*
	Product Page Custom Placeholders
*/

View::composer('syntara::layouts.dashboard.master', function($view)
{
    $view->with('siteName', 'RAJ Technologies Inc.');
});

View::composer('syntara::layouts.dashboard.master', function($view)
{
    $view->with('favicon', 'favicon_path');
    $view->with('faviconType', 'favicon_type');
});

/*
	CreateSCS Route
*/

Route::get('Products/createSCS', function()
{
	return View::make('Products/createSCS');
});

/*
	Create Supplier / Category / Sub Category
*/

Route::post('CreateSCS.Supplier', array(
    'as' => 'CreateSCS.Supplier',
	'before' => 'csrf',
    'uses' => 'ProductController@create1'
    )
);

Route::post('CreateSCS.Category', array(
    'as' => 'CreateSCS.Category',
	'before' => 'csrf',
    'uses' => 'ProductController@create2'
    )
);

Route::post('CreateSCS.SubCategory', array(
    'as' => 'CreateSCS.SubCategory',
	'before' => 'csrf',
    'uses' => 'ProductController@create3'
    )
);

/*
	Delete Supplier / Category / Sub Category
*/

Route::delete('DeleteSupplier/{id}', array('before' => 'csrf', 'uses' => 'ProductController@destroy1', 'as' => 'DeleteSupplier/'));
Route::delete('DeleteCategory/{id}', array('before' => 'csrf', 'uses' => 'ProductController@destroy2', 'as' => 'DeleteCategory/'));
Route::delete('DeleteSubCategory/{id}', array('before' => 'csrf', 'uses' => 'ProductController@destroy3', 'as' => 'DeleteSubCategory/'));

/*
	Products Management
*/

Route::post('updateStocks{id}', array(
    'as' => 'updateStocks',
	'before' => 'csrf',
    'uses' => 'ProductController@updateStocks'
    )
);

Route::resource('Products', 'ProductController', array('before' => 'csrf'));

/*
	Profile Photo controller
*/

Route::post('dashboard/user/{id}', array('uses' => 'ProfileController@postPhoto', 'as' => 'postPhoto'));

/*
	404 Error Page
*/

App::missing(function($exception)
{
    return Response::view('errors.404', array(), 404);
});
