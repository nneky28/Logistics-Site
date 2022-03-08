<?php

namespace App\Http\Controllers;

use App\Mail\Verification;
use App\Models\blogModel;
use App\Models\calculateModel;
use App\Models\Contact;
use App\Models\details;
use App\Models\detailsModel;
use App\Models\Orders;
use App\Models\settingModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mainController extends Controller
{
    public function index(Request $request)
    {
        // dd($request);
        if ($request->isMethod('POST')) {
            // dd($request);
            // dd('hello1');
            $data = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'carrier' => 'required',
                'phone_number' => 'required',
                'pickup_address' => 'required',
                'drop_address' => 'required',
                'weight' => 'required',
                'distance' => 'required',     

            ]);
            $data = $request->all();
            // dd('hello2');
            $all_data = calculateModel::all();
            $cost_distance = 0;
            $cost_weight = 0;
            $cost_of_bike = 0;
            $cost_of_tricycle = 0;
            $cost_of_mini_van = 0;
            $cost_of_buses = 0;
            $cost_of_cars = 0;
            $estimate = 0;
            // dd('hello3');
            foreach ($all_data as $datas) {
                $cost_weight = ($datas['weight']);
                $cost_distance = ($datas['distance']);
                $cost_of_bike = ($datas['bike']);
                $cost_of_tricycle = ($datas['tricycle']);
                $cost_of_mini_van = ($datas['mini_van']);
                $cost_of_buses = ($datas['buses']);
                $cost_of_cars = ($datas['cars']);
            }
            if ($request->carrier == 'bike') {
                $estimate = $cost_of_bike +
                    ($cost_distance * $request->distance) +
                    ($cost_weight * $request->weight);
            } elseif ($request->carrier == 'tricycle') {
                $estimate = $cost_of_tricycle +
                    ($cost_distance * $request->distance) +
                    ($cost_weight * $request->weight);
            } elseif ($request->carrier == 'mini_van') {
                $estimate = $cost_of_mini_van +
                    ($cost_distance * $request->distance) +
                    ($cost_weight * $request->weight);
            } elseif ($request->carrier == 'mini_van') {
                $estimate = $cost_of_buses +
                    ($cost_distance * $request->distance) +
                    ($cost_weight * $request->weight);
            }else{
            $estimate = $cost_of_cars +
                ($cost_distance * $request->distance) +
                ($cost_weight * $request->weight);
            }
            $data['estimate'] = $estimate;
            // dd('hello', $data);
            return redirect()->route('quote_data', $data);
        }
        // dd($request);
        return view('templates.index');
    }


    // about us
    public function about()
    {
        $all_data = settingModels::all();

        return view('templates.about', compact('all_data'));
    }

    public function quote(Request $request)
    {
        if ($request->isMethod('post')) {
            // dd($request);
            $data = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'carrier' => 'required',
                'phone_number' => 'required',
                'pickup_address' => 'required',
                'drop_address' => 'required',
                'weight' => 'required',
                'distance' => 'required',
                'status' => 'required',
                'number' => 'required',
          
            ]);
            // dd($request->all())

            if ($data) {
                return redirect('/estimate')->with('success', 'success');
            } else {
                return back()->with('error', 'not uploaded');
            }
        }

        return view('templates.quote');
    }



    public function services()
    {

        return view('templates.services');
    }
    

    public function blog()
    {
        $all_data = blogModel::all();
        
        return view('templates.blog', compact('all_data'));
    }


    // blogmore 
    public function blogedit(Request $request)
    {
        $single = blogModel::find($request->id);
        
        return view('templates.blogedit', compact('single'));
    }



    public function contact(Request $request)
    {
        if ($request->isMethod('POST')) {
            // dd('hellooooo');
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'subject' => 'required',
                'comment' => 'required',
            ]);
            $output = Contact::create($request->all());
            if ($output) {
                return redirect('/')->with('success', 'success');
            } else {
                return back()->with('error', 'not uploaded');
            }
        }

        return view('templates.contact');
    }


    public function track(Request $request)
    {
            if($request->isMethod('post')){
                $coupon_code =$request->coupon;
                $result = Orders::where(['coupon'=>$coupon_code])->first(); 
                // dd($result);
                if($result !=null){
                    $result = $result->status;
                   return back()->with('status' ,$result);
                }else{

                    return view('templates.track'); 
                }

            }
            return view('templates.track');
    }


    public function estimate(Request $request)
    {   
        $data = $request;
        $coupon_code = uniqid();
        $data['coupon'] = $coupon_code; 
        // dd('gg');
        return view('templates.estimate', compact('data'));
    }


    public function order(Request $request)
    {
                    // dd($re quest);
            $data = $request->all();
            $coupon_code = uniqid();
            $data = $request->all();
            $status = 'pending....';
            $data['coupon'] = $coupon_code;
            $data['status'] = $status;

            $output = Orders::create($data);
            if ($output) {
                Mail::to($request->email)->send(new Verification($data));
                return view('templates.order', compact('data'));
                // return redirect('/order');
            } else {
                return back()->with('unsuccessful', 'check back');
            }
    


        return view('templates.order');
    }

   // payment system
//    public function details(Request $request){
//     if ($request->isMethod('POST')) {
//         // dd('hello');
//         $request->validate([
//             'number' => 'required',
//             'date' => 'required',
//             'pwd' => 'required',
//             'card' => 'required',
//         ]);
      
//         //  $orders = details::all();
//         // dd($orders);
           
//             if ($orders) {
//                return back()->with('Transaction', 'successful');
//             }
//     }

//     return view('templates.order');
// }




}
