<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Input;
use App\User;

class DataController extends Controller
{
    public function view_data()
    {
      $s['data'] = \App\datapenyewa::all();
      if(\Auth::user()->tipe == 'superadmin' ){
        return view('datasewa/view')->with($s);
      }
      else if(\Auth::user()->tipe ==  2){

      }
      else if(\Auth::user()->tipe == 3 ){
        return view('datasewa/teknisi-view')->with($s);
      }
      else if(\Auth::user()->tipe == 4 ){
        return view('datasewa/akunting-view')->with($s);
      }
      return \Auth::user()->tipe;
    }
    public function add_data(Request $r)
    {
      $fasilitas = '';
      foreach ($r->input('fasilitas') as $key => $fas) {
        if($key == 0){
          $fasilitas = $fas;
        }
        else{
          $fasilitas = $fasilitas.", ".$fas;
        }

      }
    $s = new \App\datapenyewa;
    $s->nama_perusahaan = $r->input('nama_perusahaan');
    $s->nama_direktur = $r->input('nama_dir');
    $s->fasilitas = $fasilitas;
    $s->kontrak = $r->input('kontrak');
    $s->jatuh_tempo = $r->input('tempo');
    $s->harga = $r->input('harga');
    $s->save();
    return redirect()->route('view_data');
    }

    public function delete_data($id)
    {
      $s = \App\datapenyewa::find($id);
      $s->delete();
      return redirect()->route('view_data');
    }

    public function edit_data($id)
{
  $s['data'] = \App\datapenyewa::find($id);
  return view('datasewa.edit')->with($s);
}

public function view_input()
{
return view('datasewa.add');
}

public function update_data(Request $r)
{
  $s = \App\datapenyewa::find($r->input('id'));
  $s->nama_perusahaan = $r->input('nama_perusahaan');
  $s->nama_direktur = $r->input('nama_dir');
  $s->kontrak = $r->input('kontrak');
  $s->jatuh_tempo = $r->input('tempo');
  $s->save();
  return redirect()->route('view_data');
}
public function input_akun()
{

  return view('dataakun.akun');
}
public function post_akun(Request $r)
{
// echo "string";
// unset('_token');
// dd($r->all());
//   die();

  $user = new User;
  $user->name = $r->name;
  $user->username = $r->username;
  $user->password = bcrypt($r->password);
  $user->tipe = $r->hak;
  $user->save();

  return redirect('/');
}
public function lihat_akun()
{

  return view('dataakun.lihat', ['user' => User::paginate(10)]);
}
public function view_login()
{
  return view('auth.login');
}
}
