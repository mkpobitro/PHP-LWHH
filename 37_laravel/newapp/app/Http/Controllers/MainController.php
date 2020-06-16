<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\People;

class MainController extends Controller {

    // function sayHi(){
    //     return "Hello There  -from Controller";
    // }

    // function sayMyName($name){
    //     return "Hello {$name}";
    // }    
    
    // function postRequest(Request $request){
    //     $name = $request->post('name');
    // }

    function main(){
        return view("welcome");
    }    
    
    function features(){
        return view("features");
    }    
    
    function contact(){
        return view("contact");
    }

    function allPeople(){
        // return ((array) DB::table('people')->where('id','>',1)->first());
       return ( DB::table('people')
        ->where('id','>',1)
        ->orderBy('id', 'desc')
        ->limit(5)
        ->get());

        // return (DB::select("select name from people"));
    }

    function testModel(){
        // $person = People::all()->skip(1)->take(2);
        // $person = People::where('id','>=', 1)->where('id','<',4)->get();
        // $person = People::whereEmail('pob@gmail.com')->get();
        // $person = People::whereName('alam hasu')->get();
        // $person = People::whereActive(1)->first()->display_name_and_email();

        // $person = People::find(2);
        // $person->name = "Pobitrooo";
        // $person->save();
        // $person = $person->fresh();
        // return $person;

        $person = People::find(2);
        $posts = $person->posts;

        return $posts;
    }
}
