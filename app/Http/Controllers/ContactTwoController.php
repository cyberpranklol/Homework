<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactTwoController extends Controller
{
    public function index(){
        $allContacts = ContactModel::all();
        return view('allContacts', compact('allContacts'));
    }

    public function delete($contact){
        $singleContact = ContactModel::where(['id'=> $contact])->first();

        if($singleContact == null){
            die('Ovaj kontakt ne postoji!');
        }

        $singleContact->delete();
        return redirect()->back();
    }
}
