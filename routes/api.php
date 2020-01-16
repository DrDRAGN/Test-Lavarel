<?php

    use App\CompanyUsers;
    use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::get( '/company', function() { return CompanyUsers::all()->sortBy('id'); } );
    Route::delete( '/company/remove/{id}', function( $id ) { return CompanyUsers::destroy( $id ); } );
