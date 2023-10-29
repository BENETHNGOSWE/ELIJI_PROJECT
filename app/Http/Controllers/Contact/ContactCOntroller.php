<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactCOntroller extends Controller
{
    protected $data;
    public function __construct()
    {
        $this->data = Contactus::all();
    }

    public function index(){
        return view("contacts.index", $this->data);
    }

    public function create(){
        return view("contacts.create");
    }

    public function store( Request $request){

        $request->validate([
            "client_name"=> "required",
            "client_email"=> "required",
            "client_phonenumber"=> "required",
            "client_message"=> "required",
        ]);

        try{
            DB::beginTransaction();
            $contactus = Contactus::create([
                "client_name"=> $request->input("client_name"),
                "client_email"=> $request->input("client_email"),
                "client_phonenumber"=> $request->input("client_phonenumber"),
                "client_message"=> $request->input("client_message"),
            ]);
            $contactus->save();
            DB::commit();
            return redirect()->route('home')->with("success","Sent");
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->route("contacts.create")->with("error","Failed to be sent");
        }

        // $contactus = new Contactus();
        // $contactus->client_name = $request->client_name;
        // $contactus->client_email = $request->client_email;
        // $contactus->client_phonenumber = $request->client_phonenumber;
        // $contactus->client_message = $request->client_message;
    }
}
