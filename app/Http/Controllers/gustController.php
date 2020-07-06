<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guest;


class gustController extends Controller
{
    function index(Request $request){


        $guestModel = new guest;
        $gc ="rrrr";


        $guestId = $guestModel->insertGuest($request->all(),$gc);

        return $guestId;
    }

    function getGuest(){
        $guests = guest::get();

        return $guests;
    }
}
