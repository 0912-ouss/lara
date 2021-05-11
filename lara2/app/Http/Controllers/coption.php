<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\moption;
use Symfony\Component\HttpFoundation\Request;



class coption extends Controller
{
    //
    function index(){
        // $dt = moption::all();
         //return "ousaam";
          //return $dt;
          $dt=moption::paginate(2);
         return view("configoption",["dt"=>$dt]);
     }
    function paginate($id){
        // $dt = moption::all();
         //return "ousaam";
          //return $dt;
          $dt=moption::paginate($id);
         return view("configoption",["dt"=>$dt]);
     }
     
     function remove($pk){
         $o = moption::where("idOp",$pk);//i select the firste element
         if($o)//si trouvé
         {
             $o->delete();
             $dt=moption::all();
             return redirect("mesoptions");
         }
         //return "oussama";
         
     }
     function add(Request $r){
          $o = new moption();
          
          $o->nomOp = $r->nom;
         $o->description=$r->desc;
         
          $o->save();
          
          return redirect("mesoptions");
         //return"oussama";
      }
      function show($codeApp){
         $o = moption::where("idOp",$codeApp)->first();
         return view("optionedit",["o"=>$o]);
     }
      function save(Request $r ){
         $o = moption::where("idOp", $r->id)->first();
                 $o->nomOp = $r->nom;
                 $o->description=$r->desc;
                 $o->save();
                 return redirect("mesoptions");
                // return $o;
               //return"oussama";
                
      }
      function search(Request $r ,$id){
        // $dt = moption::all();
        // return $r;
         return $id;
        //return $dt;
         // $dt=moption::paginate(2)->where("nomOp","LIKE",$r->search);
        // return view("configoption",["dt"=>$dt]);
     }



}
