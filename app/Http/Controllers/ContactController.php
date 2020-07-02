<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
   public function AllContact()
   {
       $contact = DB::table('contacts')->get();
        return view('pages.allcontact',['data'=>$contact])->with('SrN', 1);           
   }

   public function InsertData()
   {
       return view('pages.insert');
   }
   
   public function DataAdded(Request $request)
   {
       $data=array();
       $data['name']=$request->name;
       $data['email']=$request->email;
       $data['phone']=$request->phone;
       $data['description']=$request->description;
       
       //Show for JSON Data
    //    echo "<pre>";
    //    print_r($data);

    $ins=DB::table('contacts')->insert($data);
    return Redirect()->back();
   }

   public function Delete($id)
   {
       $dtl=DB::table('contacts')->where('id',$id)->delete();
       return Redirect()->route('all.contacts');
   }

   public function Edit($id)
   {
       $edit=DB::table('contacts')->where('id',$id)->first();
       return view('pages.editcontact',compact('edt'));
   }

   public function Update(Request $request, $id)
   {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['description']=$request->description;

        $upd=DB::table('contacts')->where('id',$id)->update($data);
        return Redirect()->route('all.contacts');
   }

   public function View($id)
   {
    $view=DB::table('contacts')->where('id',$id)->first();
    return view('pages.view',compact('view'));
   }
}


