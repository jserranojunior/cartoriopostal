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

       //return view('emails.bodymails')->with($dados);

        Mail::send('emails.bodymails', $dados, function($message){
            // $message->to('contato@solucaosmart.com');
            $message->to('contato@solucaosmart.com.br');
            $message->subject('E-mail enviado pelo site da Solucão Smart');
        });
        return response()->json([
            'message' => 'E-mail Enviado',  
            'data' => ''              
        ]);
    }

    public function clube(Request $request){
    
        $dados = ['dados' => $request->all()];       

        Mail::send('emails.clube', $dados, function($message){
            // $message->to('jorgeserranojunior@hotmail.com');
            $message->to('contato@solucaosmart.com.br');
            $message->subject('E-mail enviado pelo site da Solucão Smart');
        });
        return response()->json([
            'message' => 'E-mail Enviado',  
            'data' => ''              
        ]);
    }


    public function trabalheconosco(Request $request){    
        $dados = ['dados' => $request->all()];       

        Mail::send('emails.trabalheconosco', $dados, function($message){
            // $message->to('jorgeserranojunior@hotmail.com');
            $message->to('contato@solucaosmart.com.br');
            $message->subject('E-mail enviado pelo site da Solucão Smart');
        });
        return response()->json([
            'message' => 'E-mail Enviado',  
            'data' => ''              
        ]);
    }
}

