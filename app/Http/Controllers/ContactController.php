<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function page(Request $request)
    {
        $seo = DB::table('seoproperties')->where('pageName', '=', 'contact')->first();
        return view('pages.contact', ['seo' => $seo]);
    }

    function contactRequest(Request $request)
    {
        $validatedData = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string|max:1000',
        ]);
        // return DB::table('contacts')->insert($request->input());
        if($validatedData){
            if (DB::table('contacts')->insert($request->input())) {
                //when data is inserted now send email to contact
                submitForm($request);
            }
        }
    }


    /**this is for sending email to me */

    public function submitForm(Request $request)
    {
                // Send the email
        Mail::to('tayoburrahman119@gmail.com')->send(new ContactFormMail($validatedData));
        return response()->json(['success' => true], 200);
    }

    //just need setup smtp server
}
