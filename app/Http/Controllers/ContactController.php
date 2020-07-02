<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;

class ContactController extends Controller
{
    public function ContactSend(Request $req)
    {
     $ContactArray=  json_decode($req->getContent(),true);
     $contact_name = $ContactArray['contact_name'];
     $contact_email=$ContactArray['contact_email'];
    $contact_message=$ContactArray['contact_message'];
     $result=ContactModel::insert(['contact_name'=>$contact_name,'contact_email'=>$contact_email,'contact_message'=>$contact_message]);
    if($result==true){
     return 1;
    }
    else{
     return 0;
    }
}

   
}
