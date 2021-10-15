<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('front.contact');
    }
    public function about(){
        return view('front.about');
    }



    public function store(ContactRequest $request){
       // return $request ;
        $data = Contact::create(['f_name'=>$request->f_name,'l_name'=>$request->l_name,'email'=>$request->email,'subject'=>$request->subject]);
        $data->save();

        return redirect()->back()->with(['success' => 'تم الارسال بنجاح']);
    }
}
