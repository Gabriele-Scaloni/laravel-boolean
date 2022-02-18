<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postcard;

class ApiController extends Controller
{

    public function getPostcards() {
        $postcards = postcard::all();
        return json_encode($postcards);
    }
    
}
