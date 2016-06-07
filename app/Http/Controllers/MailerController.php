<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class MailerController extends Controller
{
  public function index(Request $r)
  {
    return view('email.index');
  }

  public function store(Request $r)
  {
    $nama = $r->input('nama');
    $email = $r->input('email');
    $ucapan = $r->input('ucapan');

    Mail::send('email.greeting', ['user_greeting' => $ucapan], function ($m) use ($nama,$email,$ucapan) {
          $m->from('managementtenant10@gmail.com', 'Management Tenant');
          $m->to($email, $nama)->subject('Halo '.$nama);
      });

    return redirect('greeting');
   }
}
