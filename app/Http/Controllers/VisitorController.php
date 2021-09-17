<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Visitors;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
   public function index(){
//       $staff= Staff::all();
//
//       $visitors=Visitors::with(['staff']);
       return view('welcome');
   }
//   public function view($id){
//
//       return view('visitor.view');
//
//   }
//   public function store(Request $request){
//       $request->validate([
//           'fname' => 'required',
//           'lname' => 'required',
//           'phone_number' => 'required',
//           'staff_id' => 'required'
//       ]);
//       $store = new Visitors();
//       $store->fname =$request->fname;
//       $store->lname = $request->lname;
//       $store->phone_number = $request->phone_number;
//       $store->staff_id = $request->staff_id;
//       $store->save();
//
//    return redirect(route('visitor.store'))->with(['message'=>'Details saved, pls wait shortly for the person you are here to see.']);
//   }
//   //
}
