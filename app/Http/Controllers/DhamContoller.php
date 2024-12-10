<?php

namespace App\Http\Controllers;

use App\Models\Dham;
use Exception;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\String_;

class DhamContoller extends Controller
{
    function __construct() {

        if (!Auth::check()) {
           abort("404","Can Not enter");
        }

     }

     public function list_dham(): View{
     $dhamlist   =   Dham::all();

     return view('admin.dham.dham_list',compact('dhamlist'));
     }

     public function show_dham(Request $request): View{
         $page_name  = "Add Dham";
         $page = '';

      return view( 'admin.dham.add_dham',compact('page_name','page'));
     }

     public function store_dham(Request $request){
        $request->validate([
          'name' => 'required',
        ]);

        $dhams  = new Dham();
        $dhams->name = $request->name;
        $dhams->state_name = $request->state_name;
        $dhams->state_code = $request->state_code;
        $dhams->district_code = $request->district_code;
        $dhams->district_name = $request->district_name;
        $dhams->block_name = $request->block_name;
        $dhams->block_code = $request->block_code;
        $dhams->vilage_name = $request->vilage_name;
        $dhams->place_localname = $request->place_localname;
        $dhams->drop_station = $request->drop_station;
        $dhams->catch_station = $request->catch_station;
        $dhams->route_name = $request->route_name;
        $dhams->created_at = date('Y/H/I');
        $dhams->updated_at = date('Y/H/I');

         $dhams->save();

         $request->session()->flash('success', 'Dham Added Successfully');

        return redirect()->route('dham.list');
     }

     public function edit_dham(Request $request){
             $id  = $request->get('slug');
              $dhames  =  Dham::find($id);

              $page = '12';
            if(empty($dhames)){
                $request->session()->flash("error",'Someting went wrong');
                return redirect()->route('dham.list');
            }
            $page_name  = "Edit Dham";
            return view('admin.dham.add_dham',compact('dhames','page_name'));
    }


    public function edit_dham_update(Request $request) {
        $id = $request->get('slug');
        if (empty($id)) {
            return redirect()->route('dham.list');
        }
        $dhams = Dham::find($id);
        if (!$dhams) {
            return redirect()->route('dham.list')->with('error', 'Dham not found');
        }
        $dhams->name = $request->name;
        $dhams->state_name = $request->state_name;
        $dhams->state_code = $request->state_code;
        $dhams->district_code = $request->district_code;
        $dhams->district_name = $request->district_name;
        $dhams->block_name = $request->block_name;
        $dhams->block_code = $request->block_code;
        $dhams->vilage_name = $request->village_name;
        $dhams->place_localname = $request->place_localname;
        $dhams->drop_station = $request->drop_station;
        $dhams->catch_station = $request->catch_station;
        $dhams->route_name = $request->route_name;
        $dhams->updated_at = now();

        $dhams->save();

        $request->session()->flash('success', 'Dham updated');
        return redirect()->route('dham.list');
    }


    public function delete_dham(Request $request) {
        $id = $request->get('slug');


        if (empty($id)) {
            return redirect()->route('dham.list')->with('error', 'Invalid Dham ID');
        }
        $dham = Dham::find($id);
        if (!$dham) {
            return redirect()->route('dham.list')->with('error', 'Dham not found');
        }
        $dham->delete();
        $request->session()->flash('success', 'Dham Deleted');
        return redirect()->route('dham.list');
    }


}
