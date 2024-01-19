<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GameplayController extends Controller
{
    public function Affichegame(){
        $randNumbers=[];
        while(count($randNumbers)<4){
            $randX=rand(1,9);
            if(!in_array($randX, $randNumbers)){
                array_push($randNumbers, $randX);
            }
        }
        session()->put("randDesnumbers",$randNumbers);
        //dump($randNumbers);
        return view('welcome');
    }
    public function Verifier(Request $request){
        //Valeur User Recuperer
        $userVar=[$request->input("v1"),$request->input("v2"),$request->input("v3"),$request->input("v4")];
        //dump(session()->get("randDesnumbers"));
        //Random Number Generer
        // $x=session()->get("randDesnumbers");
        $x=[1,2,3,4];
        $y=0;
        $l=0;
        //echo count($userVar);
        //echo "<br>";
        for($i=0;$i<count($userVar);$i++){
            $key=array_search($userVar[$i], $x);
            //dump($key);
            if($key!== false){
                $y++;
                if($key==$i){
                    $l++;
                }

            }
        }
        session()->put("Nombre correcte",$y);
        session()->put("Nombreenplace",$l);
        return view('welcome');
        //echo $y." Nombre correcte et ".$l." valeur dans la meme place";
    }
}


