<?php

namespace App\Http\Controllers;

use App\People;
use Illuminate\Http\Request;

class FormController extends Controller {
    function displayForm() {
        return view( "form" );
    }

    function saveForm( Request $request ) {
        $name = $request->post( 'name' );
        $email = $request->post( 'email' );

       /* if ( People::whereEmail( $email )->count() == 0 ) {
            $person = new People();
            $person->name = $name;
            $person->email = $email;
            $person->save();
        } */

        People::firstOrCreate( ['email' => $email], ['name' => $name, 'email' => $email] );

        return redirect()->route( 'form.create' );
    }
}
