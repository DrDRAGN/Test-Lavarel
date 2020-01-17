<?php

    use App\CompanyUsers;
    use Illuminate\Http\Request;

    Route::middleware( 'auth:api' )->get( '/user', function ( Request $request ) { return $request->user(); } );

    // Users company
    Route::get( '/company', function () { return CompanyUsers::all()->sortBy( 'id' ); } );
    Route::get( '/company/{id}', function ( $id ) { return CompanyUsers::find( $id ); } );
    Route::put( '/company/create', function ( Request $request ) { return CompanyUsers::create( $request->all() ); } );
    Route::put( '/company/update/{id}',
        function ( Request $request, $id )
        {
            $user = CompanyUsers::find( $id );
            $user->update( $request->all() );
            return $user;
        }
    );
    Route::delete( '/company/remove/{id}', function ( $id ) { return CompanyUsers::destroy( $id ); } );
