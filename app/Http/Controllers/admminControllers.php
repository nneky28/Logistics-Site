<?php

namespace App\Http\Controllers;

use App\Mail\Verification;
use App\Models\blogModel;
use App\Models\calculateModel;
use App\Models\Contact;
use App\Models\detailsModel;
use App\Models\Orders;
use App\Models\settingModels;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class admminControllers extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('signin', 'admin', 'dashboard1');
    }

    public function signin(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);

            $data = $request->all();
            $data['password'] = Hash::make($request->password);
            $output = User::create($data);

            // dd($data);
            if ($output) {
                return redirect('/admin');
            } else {
                return back()->with('unsuccessful', 'check back');
            }
        }
        return view('admin-layouts.signin');
    }

    // Order
    public function adminorder(Request $request)
    {
        if ($request->isMethod('post')) {
            $order_all = Orders::all();

            return view('admin-layouts.orderdetails', compact('order_all'));
        } else {

            // $order_all = Orders::paginate(5);
            $order_all = Orders::orderBy('id', 'DESC')->Paginate(5);

            return view('admin-layouts.adminorder', compact('order_all'));
        }
    }

    // populating
    public function code(Request $request)
    {
        if ($request->isMethod('POST')) {

       
            $order_all = Orders::where(['coupon' => $request->coupon])->first();
           
            if ($order_all) {
                Orders::where('coupon', '=', $request->coupon)->update(['status' => 'completed']);
                return view('admin-layouts.orderdetails', compact('order_all'));
            }
        }
        $order_all =  Orders::where(['coupon' => $request->coupon])->first();
        return view('admin-layouts.orderdetails', compact("order_all"));
    }

    // updating status 
    public function update(Request $request)
    {
        if ($request->isMethod('POST')) {
            // dd($request);
            $order_all = Orders::where(['coupon' => $request->coupon])->update(['status' => $request->status]);
            // dd($order_all);
            $order_all = (object) $order_all;
            // if ($order_all != null) {
            // Orders::where(['coupon'=> $request->coupon])->update(['status' => '2']);
            return redirect('/adminorder');
            // return view('admin-layouts.orderdetails', compact('order_all'));
            // }

        }
    }


    public function admin(Request $request)
    {
        // dd('hello');
        if ($request->isMethod('post')) {
            $req =  $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);;
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

                $request->session()->regenerate();
                $request->session()->put('login', $request->email);
                return redirect()->intended('/dashboard');
            } else {
                // return back()->with('error', 'not correct');
                return redirect('/signin');
            }
        }
        return view('admin-layouts.adminLogin');
    }

    public function dashboard()

    {
        $output = blogModel::all();
        $data = settingModels::all();
        $order_all = Orders::orderBy('id', 'DESC')->Paginate(5);
        return view('admin-layouts.dashboard', compact('output', 'data', 'order_all'));
    }

    public function dashboard1()

    {
        $output = blogModel::all();
        $datas = settingModels::all();
        $order_all = Orders::orderBy('id', 'DESC')->Paginate(5);
        $contact = Contact::paginate(5);
        $data = calculateModel::all();
        return view('admin-layouts.dashboard1' , compact('output', 'data','order_all','contact','datas'));
    }



    public function adminblog(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'author' => 'required',
                'title' => 'required',
                'desc' => 'required',
                'content' => 'required',
                'image' => 'required',
                'categories' => 'required',
            ]);
            $data = $request->all();

            $name = $request->file('image')->getClientOriginalName();
            // $path = $request->file('image')->storeAs('public', 'images');
            // dd($path);
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $destinationpath = 'images';
            $file->move($destinationpath, $file->getClientOriginalName());
            // $path = Storage::putFileAs('image', new File(), $name);

            $data['image'] = $filename;

            $output = blogModel::create($data);
            if ($output) {
                return redirect('/dashboard')->with('success', 'success');
            } else {
                return back()->with('error', 'not uploaded');
            }
        }
        return view('admin-layouts.adminblog');
    }

    public function contactdetails(Request $request)
    {
        $contact_all = Contact::paginate(5);
        return view('admin-layouts.contactdetails', compact('contact_all'));
    }


    public function UserD(Request $request)
    {
        $contactid = $_POST['details'];
        $output = Contact::find($contactid);
        return view('admin-layouts.userdetails', compact('output'));
    }



    public function adminabout(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([

                'content' => 'required',
                'image' => 'required',
            ]);

            $name = $request->file('image')->getClientOriginalName();;
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $destinationpath = 'images';
            $file->move($destinationpath, $file->getClientOriginalName());
            $data['image'] = $filename;

            $output = settingModels::create($data);
            if ($output) {
                return redirect('/dashboard')->with('success', 'success');
            } else {
                return back()->with('error', 'not uploaded');
            }
        }

        return view('admin-layouts.adminabout');
    }

    //    admin edit 
    public function change(Request $request)
    {
        if ($request->action == 'edit') {
            if ($request->isMethod('post')) {
                $affected = settingModels::where('id', $request->id)->update(['content' => $request->content, 'image' => $request->image]);
                return redirect('/dashboard');
            }
            
            $output = settingModels::find($request->id);
            return view('admin-layouts.adminchange', compact('output'));
        }
    }



// admin action delete or edit 

public function Changes(Request $request)
    {
         if ($request->action == 'edit') {
            //  dd($request);
            if ($request->isMethod('post')) {

                $affected = blogModel::where('id', $request->id)->update(['author' => $request->author,'title'=>$request->title,'desc'=>$request->desc, 'categories'=>$request->categories,'image'=>$request->image,'content'=>$request->content]);
                // dd($affected);

                return redirect('/dashboard');
            }
            $output = blogModel::find($request->id);
            // dd($output);
            return view('admin-layouts.adminblogedit', compact('output'));
        } else {
            // delete function
            $output = blogModel::all();
            $datas = settingModels::all();
            $affected = blogModel::where('id', $request->id)->delete();
            return view('admin-layouts.dashboard', compact('output', 'data'));
        }
    }



    // admin cal 
    public function calculator(Request $request)
    {
        if ($request->isMethod('get')) {
            $data = calculateModel::all();
         
           return view('admin-layouts.calculator', compact('data'));
        }
        $update = calculateModel::where('id', '1')->update(['weight' => $request->weight, 'distance' => $request->distance, 'bike'=>$request->bike,'tricycle'=>$request->tricycle, 'mini_van'=>$request->mini_van, 'buses'=>$request->buses, 'cars'=>$request->cars]);

        if ($update) {
            $data = calculateModel::all();
            return view('admin-layouts.calculator', compact('data'))->with('success', 'successfully updated');
        } else {
            return view('admin-layouts.calculator')->with('error', 'error');
        }
    }






}
