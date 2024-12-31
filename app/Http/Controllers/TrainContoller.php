<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;

class TrainContoller extends Controller
{
    function __construct() {
        if(!Auth::check()){
            abort(404, config('constants.404_ERROR'));
        }
     }
     public function index():View{

       return view('admin.train.train_index',['trainlist'=>Train::all()]);
     }


     public function show_add_page():View{
        $page  = "";

        return view('admin.train.add_train',compact('page'));
     }

}
