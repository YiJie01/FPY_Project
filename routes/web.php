<?php

use Illuminate\Support\Facades\Route;
use Kyslik\ColumnSortable\Sortable;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//home page
Route::get('/', function () {
    return view('jjgstorehome');
});
//Route::get('/storehome', function () {
//    return view('jjgshome');
//});

//seacrh
Route::post('UserSearchProduct', [
    'uses'=>'HomeController@usersearch',
    'as' => 'usersearch.product'
]);


//end search



//Route::get('/storehome',[
//    'uses'=>'ProductController@homepagelistFPS',
//    'as'=>'homepagelistFPS.typeFPS' 
//]);

//end

//user login&R
Route::get('/UserLogin', function () {
    return view('auth.login');
});

Route::get('/UserRegister', function () {
    return view('auth.register');
});

//end

//Product page
//game list page
//Route::get('/ProductCategory', function () {
//    return view('productcategory');
//});
//Route::get('/ProductCategory',[
//    'uses'=>'ProductController@gamelist',
//    'as'=>'gamelist.product'
    
//]);

//end game list page

//get id and display id product (show product datail)
Route::get('/Game/{productid}',[
    'uses'=>'ProductController@productcontent',
    'as'=>'productcontent.product'
    
]);

Route::get('/Product', function () {
    return view('product');
});




//support page
Route::get('/Support', function () {
    return view('support');
});
//end

//cart page
Route::post('/addToCart',[
    'uses'=>'CartController@add',
    'as'=>'add.to.cart'
]);

Route::get('/myCart',[
    'uses'=>'CartController@showcartproduct', 
    'as'=>'my.cart'
]);

Route::get('/myCart/delete/{id}',[
    'uses'=>'CartController@delete', 
    'as'=>'delete.cart'
]);

//end

//order 
Route::post('/createorder',[
    'uses'=>'OrderController@add',
    'as'=>'create.order'
]);

Route::get('/myorder',[
    'uses'=>'OrderController@show',
    'as'=>'my.order'
]);

Route::get('/myOrder/delete',[
    'uses'=>'OrderController@delete', 
    'as'=>'delete.order'
]);

//end

//userStore
Route::post('/createstore',[
    'uses'=>'UserstoreController@add',
    'as'=>'add.to.store'
]);

Route::get('/myStore',[
    'uses'=>'UserstoreController@show',
    'as'=>'my.store'
]);

//end

//refund

//Route::get('/refund', function () {
//    return view('refund');
//});

Route::get('/refund',[
    'uses'=>'RefundController@create',
    'as'=>'refund'
]);

Route::post('/addRefund',[
    'uses'=>'RefundController@add',
    'as'=>'add.to.refund'    
]);

Route::get('/UserRefund',[
    'uses'=>'RefundController@refundview',
    'as'=>'Admin.allrefund'
]);

Route::get('/Refund/delete/{id}',[
    'uses'=>'RefundController@delete', 
    'as'=>'delete.refund'
]);

//end

//about admin 
Route::get('/AdminL', function () {
    return view('adminLogin');
});

Route::get('/AdminR', function () {
    return view('adminRester');
});

Route::get('/registerAdmin',[
    'uses'=>'adminController@create',
    'as'=>'admin'
]);

Route::post('/addadmin/register',[
    'uses'=>'AdminController@register',
    'as'=>'addadmin.register'    
]);
//end

//admin page
Route::get('/Admin', function () {
    return view('jjgsAdminHome');
});

Route::get('/AdminL', function () {
    return view('adminLogin');
});

Route::get('/AdminR', function () {
    return view('adminRester');
});

//end 

// add game
Route::get('/insertGame',[
    'uses'=>'ProductController@create',
    'as'=>'product'
]);

Route::post('/addProduct/insert',[
    'uses'=>'ProductController@insert',
    'as'=>'addProduct.insert'    
]);


Route::get('/ProductMenu',[
    'uses'=>'ProductController@productmenu',
    'as'=>'product'
]);

//add Tag

Route::get('/insertGameTag',[
    'uses'=>'TagController@create',
    'as'=>'tag'//repat in html
]);

Route::post('/addProduct/insert',[
    'uses'=>'ProductController@insert',
    'as'=>'addProduct.insert'    
]);


//Route::get('/ProductMenu',[
//    'uses'=>'ProductController@productmenu',
//    'as'=>'view.product'
//]);

//

//delete&Edit
Route::get('/ProductMenu/delete/{productid}',[
    'uses'=>'ProductController@delete',
    'as'=>'delete.product'//test product to allproduct
]);

Route::get('/ProductMenu/editproduct/{productid}',[
    'uses'=>'ProductController@edit',
    'as'=>'edit.product'
]);

Route::post('updateproduct',[
    'uses'=>'ProductController@update',
    'as'=>'update.product'
]);

//search at admin all product menu
Route::post('searchproduct',[
    'uses'=>'ProductController@adminsearch',
    'as'=>'adminsearch.product'
]);


//end
Route::get('/insertGame',[
    'uses'=>'ProductController@create',
    'as'=>'product'
]);

Route::post('/addProduct/insert',[
    'uses'=>'ProductController@insert',
    'as'=>'addProduct.insert'    
]);


Route::get('/ProductMenu',[
    'uses'=>'ProductController@productmenu',
    'as'=>'product'
]);
//support page

Route::get('/Support',[
    'uses'=>'SupportController@create', 
    'as'=>'support'
]);

Route::post('/Support/store',[
    'uses'=>'SupportController@insert', 
    'as'=>'adminInsertSupport.insert'
]);

Route::get('/manageSupport',[
    'uses'=>'SupportController@show', 
    'as'=>'all.support'
]);

Route::get('/manageSupport/delete/{id}',[
    'uses'=>'SupportController@delete', 
    'as'=>'delete.support'
]);

Route::get('/editSupport/{id}',[
    'uses'=>'SupportController@edit', 
    'as'=>'edit.support'
]);

Route::post('/updateSupport',[
    'uses'=>'SupportController@update', 
    'as'=>'update.support'
]);


Route::get('/UserSupport',[
    'uses'=>'SupportController@show', 
    'as'=>'user.support'
]);

Route::get('/UserSupport', function () {
    return view('User.userviewsupport');
});



/* Route::post('/Support/store',[
    'uses'=>'EmployeeController@store', 
    'as'=>'manageSupport.store'
]); */
//end

//paypal
//route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');

//route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');

//pagination
Route::get('/ProductMenu','ProductController@allproductlist');

Route::get('/ProductCategory','ProductController@allproductgamelist');

Route::get('/','HomeController@homepagelist');

Route::get('/1', 'HomeController@index')->name('jjgstorehome');

Auth::routes();