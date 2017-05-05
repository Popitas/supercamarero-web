<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

#Añadido para que pueda usar Request
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req){
      $name = $req->input('name');
      $description = $req->input('description');
      $ingredients = $req->input('ingredients');
      $picture = $req->input('picture');



      $data = array('name' =>$name ,"description"=>$description, "ingredients"=>$ingredients, "picture"=>$picture);

      \DB::table('platos')->insert($data);
      return getData();
    }

    #Creada por Nano
    function getData(){
      $data['data'] = \DB::table('platos')->get();
      if (count($data)>0) {
        return view('home',$data);
      } else {
        return view('home');
      }

    }

}
