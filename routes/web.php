<?php

use Illuminate\Support\Facades\Route;
//front end controllers

use App\Http\Controllers\FrontEndController;

//admin panel controllers
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GeneralController;
use App\Http\Controllers\QuotationController;

use App\Http\Controllers\OrderController;

use App\Http\Controllers\CommandeController;

use App\Http\Controllers\CompactibleController;


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

Route::group(array('prefix' => 'admin'), function () {

    # All basic routes defined here


    Route::get('/', [AdminController::class, 'index']);


});

Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'as' => 'admin.'], function () {
	Route::get('/', [AdminController::class, 'index']);
	Route::get('logout', [FrontEndController::class, 'getLogout']);
	Route::group(array('prefix' => 'devis'), function () {
		Route::get('/', [QuotationController::class, 'admindevis']);
		Route::get('edit/{id}', [QuotationController::class, 'editdevis']);
		Route::post('update/{id}', [QuotationController::class, 'updatedevis']);
		Route::get('traiter', [QuotationController::class, 'traiter']);
		Route::get('encours', [QuotationController::class, 'encours']);
	});
	Route::group(array('prefix' => 'commande'), function () {
		Route::get('/', [CommandeController::class, 'adminTraiters']);
		Route::get('traiter', [CommandeController::class, 'adminTraiters']);
		Route::get('encours', [CommandeController::class, 'adminEncours']);
		Route::get('envoye', [CommandeController::class, 'adminEnvoye']);
		Route::get('edit/{id}', [CommandeController::class, 'editcommande']);
		Route::get('status/{st}/{id}', [CommandeController::class, 'statuscommande']);
	});
    Route::group(array('prefix' => 'compteclient'), function () {

        Route::get('/commandes', [CommandeController::class, 'adminTraiters']);
        Route::get('devis', [QuotationController::class, 'admindevis']);
        Route::get('factures', [GeneralController::class, 'adminFactures']);
        Route::get('statistiques', [GeneralController::class, 'adminStatistiques']);
        Route::get('avoris', [GeneralController::class, 'adminAvoris']);
    });
	Route::group(array('prefix' => 'comptabililite'), function () {
        Route::get('/', [CommandeController::class, 'adminTraiters']);
        Route::get('devis', [QuotationController::class, 'admindevis']);
        Route::get('factures', [GeneralController::class, 'adminFactures']);
        Route::get('statistiques', [GeneralController::class, 'adminStatistiques']);
        Route::get('avoris', [GeneralController::class, 'adminAvoris']);

		Route::get('/', [CommandeController::class, 'adminTraiters']);
        Route::get('clients',[CompactibleController::class,'clients']);
        Route::get('generate-pdf/{id}', [CompactibleController::class, 'generate_pdf']);
        Route::get('compte-details/{id}',[CompactibleController::class,'details']);
        Route::put('update-user/{id}', [CompactibleController::class, 'update']);
        Route::get('compte-client-commandes/{id}',[CompactibleController::class,'compte_client_commandes_details']);
        Route::get('compte-client-devis/{id}',[CompactibleController::class,'compte_client_devis']);

		Route::get('traiter', [CommandeController::class, 'adminTraiters']);
		Route::get('encours', [CommandeController::class, 'adminEncours']);
		Route::get('envoye', [CommandeController::class, 'adminEnvoye']);
		Route::get('edit/{id}', [CommandeController::class, 'editcommande']);
		Route::get('status/{st}/{id}', [CommandeController::class, 'statuscommande']);
	});
	Route::group(array('prefix' => 'products'), function () {
		Route::get('/', [CommandeController::class, 'adminProducts']);
		Route::get('edit/{id}', [CommandeController::class, 'editProducts']);
		Route::post('update/{id}', [CommandeController::class, 'updateProducts']);
		Route::get('delete/{id}', [CommandeController::class, 'deleteProducts']);
	});
});

//front end work
Route::get('/', [FrontEndController::class, 'index']);

Route::get('/contactus', [FrontEndController::class, 'contactus']);

Route::get('devis', [QuotationController::class, 'devis']);
Route::post('devis', [QuotationController::class, 'save']);

Route::get('register', [FrontEndController::class, 'register_user']);

Route::post('register', [FrontEndController::class, 'register_post']);

Route::group(array('middleware' => 'user'), function () {

	Route::get('command_plan', [FrontEndController::class, 'command_plan']);

	Route::post('command_plan', [CommandeController::class, 'save_command_plan']);

	Route::get('memory', [FrontEndController::class, 'memory_report']);

	Route::post('memory', [CommandeController::class, 'save_memory_report']);

	Route::get('booklet', [FrontEndController::class, 'booklet']);

	Route::post('booklet', [CommandeController::class, 'save_booklet']);

	Route::post('attach', [CommandeController::class, 'save_attach']);


	Route::get('attach', [FrontEndController::class, 'attach']);

	Route::get('my-account', [FrontEndController::class, 'myaccount']);

	Route::get('user-dashboard', [FrontEndController::class, 'userDashboard']);

	Route::get('mydevis', [QuotationController::class, 'mydevis']);

	Route::get('mycommandes', [CommandeController::class, 'mycommandes']);

	Route::get('commande/detail/{id}', [CommandeController::class, 'detail']);

	Route::post('devis/accept/{id}', [OrderController::class, 'devisAccept']);


	Route::get('plans_life', [FrontEndController::class, 'plans_life']);

	Route::post('plans_life', [QuotationController::class, 'save_plans_life']);

	Route::get('logout', [FrontEndController::class, 'getLogout']);

});


Route::get('login', [FrontEndController::class, 'getLogin'])->name('login');

Route::post('login', [FrontEndController::class, 'postLogin'])->name('login');

Route::get('fichiers-faq', [FrontEndController::class, 'fichiers_faq']);

Route::get('user_dashbord', [FrontEndController::class, 'user_dashbord']);

Route::get('panier', [FrontEndController::class, 'panier']);

//admin panel work
Route::get('admin_dashbord', [AdminController::class, 'dashbord']);
//show data



