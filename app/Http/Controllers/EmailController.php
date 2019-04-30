<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function index(){
        return view('emails.mails');
    }

    public function send(Request $request){
       
        
        $dados = ['dados' => $request->all()];        

        Mail::send('emails.contato', $dados, function($message){         
            $message->from('contato@cartoriopostalbras.com.br', 'Cartório');   
            $message->to('contato@cartoriopostalbras.com.br');
            $message->subject('E-mail enviado pelo site do Cartório Postal');
        });
        return response()->json([
            'message' => 'E-mail Enviado',  
            'data' => $dados              
        ]);
    }

}

