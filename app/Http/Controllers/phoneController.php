<?php

namespace App\Http\Controllers;

use App\Models\phoneBook;
use Illuminate\Http\Request;
use php_user_filter;

class phoneController extends Controller
{
    public function Phone(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'role' => 'required',
                'phone' => 'required',
                'location' => 'required',
                'image'=>'required',
            ]);
            // $data = $request->all();
            
            
            if($request->type=='edit'){
                $saved=phoneBook::where('id',$request->id)->update($request->except(['type','id','created_at','updated_at'])); 
                if($saved){
                    return response()->json($request->except(['created_at','updated_at']));
                }
                
            }else{
                $all_contacts = $request->all();
                // dd($all_contacts);
                $save_contacts = phoneBook::create($all_contacts);
                if($request->wantsJson()){
                    return response()->json($save_contacts);
                }elseif($save_contacts){
                    return back()->with("message", "Contact successfully saved.");
                }
            }
        }
    }



    public function editContact(Request $request)
    {
        if ($request->isMethod('PUT')) {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'role' => 'required',
                'phone' => 'required',
                'location' => 'required',
            ]);
            $edit = phoneBook::where('id', $request->id)->update(['name' => $request->name, 'email' => $request->email, 'role' => $request->role, 'location' => $request->location, 'phone' => $request->phone]);

            if ($edit) {
                return response()->json(['msg' => 'list updated successfully', 'data' => $edit]);
            }
        }
    }
    public function deleteContact( $id)
    {
       
        $deleted=phoneBook::where('id', $id)->delete();
        if($deleted){
            return response()->json(['msg' => 'contact deleted successfully']);
        }
        
    }

    public function Group()
    {

        $list = phoneBook::all();
        return response()->json($list);
    }

}
