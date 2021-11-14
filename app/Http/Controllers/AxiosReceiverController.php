<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class AxiosReceiverController extends Controller
{
    function ReceiveIt(Request $request){
        $form= new Form;
        $form->name= $request->input('name');
        $form->email= $request->input('email');
        $form->phone= $request->input('phone');
        $form->message= $request->input('message');
        //return json_encode($validateData);
        $form->save();
        return $form;
    }

    /* function ReceiveIt(){

    return "Hello"; */
}

