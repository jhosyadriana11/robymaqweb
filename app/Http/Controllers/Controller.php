<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class Controller
{
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        return view('home');
    }

    public function servicios()
    {
        return view('servicios');
    }

    public function servicios1()
    {
        return view('servicio1');
    }

    public function servicios2()
    {
        return view('servicio2');
    }

    public function servicios3()
    {
        return view('servicio3');
    }

    public function servicios4()
    {
        return view('servicio4');
    }

    public function servicios5()
    {
        return view('servicio5');
    }

    public function servicios6()
    {
        return view('servicio6');
    }

    public function certificaciones()
    {
        return view('certificaciones');
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function enviar(Request $request)
    {
        if ($request->filled('honeypot')) {
        return redirect()->back()->with('error', 'Acceso no permitido');
        }

        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $content = $request->input('content');

        $data = array(
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'content' => $content
        );

        Mail::send('email', $data, function ($message) use ($data) {
            $message->from($data['email'], $data['name']);
            $message->to('robymaqq@gmail.com')->subject('Correo enviado desde robymaq.com');
        });

        return redirect()->back()->with('success', 'Mensaje enviado correctamente');
    }

    public function terminos()
    {
        return view('terminos');
    }

    public function politicas()
    {
        return view('politicas');
    }
}
