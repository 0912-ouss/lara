<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\moption;
use Illuminate\Support\Facades\DB;


class coption extends Controller
{
    //
    function index(){
        $dt = moption::all();
        //return "ousaam";
         //return $dt;
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
     function show($id){
        //$o = moption::where("idOp",$id)->first();
        //return redirect("optionedit",["o"=>$o]);
       //return view("optionedit");
      
       //return $o;
       return"oussama";
    }
     function save(Request $r ){
       // $o = moption::where("idOp", $r->id)->first();
             /*   $o->idOp = $r->id;
                $o->nomOp = $r->nom;
                $o->description=$r->desc;
                $o->save();
                return redirect("mesoptions");*/
              //  return $o;
              return"oussama";
               
     }
}
