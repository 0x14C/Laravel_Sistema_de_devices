<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{

    public function home(Request $request){

        $listar = DB::select('SELECT * FROM nwtdevicesz');
        
        return view('home', [
            'listar' => $listar
        ]);
    }

    public function novos(Request $request){
        //$url = $request->url();
        //echo "seu link: ".$url; //print_r($dados); //$dados = $request->all();
        return view('cadastrar');

    }

    public function novosPost(Request $request){
        
        $IP = $request->all('IP', 'Nome', 'SSID', 'Canal', 'Coordenada', 'Fita');
        DB::table('nwtdevicesz')->insert([
            'IP' => $IP
        
        ]);   
        return redirect()->route('raiz');
    }

    
    

    public function editar($id){
        $data = DB::select('SELECT * FROM nwtdevicesz WHERE id = :id', [
            'id' => $id
        ]);

        if(count($data) > 0 ) {

        return view('editar', [
            'data' => $data[0]
        ]);
    } else {
        return redirect()->route('raiz');
    }
    }

    public function editarpost(Request $request, $id){

        $IP = $request->all('IP', 'Nome', 'SSID', 'Canal', 'Coordenada', 'Fita');
        
            $IP = $request->input('IP');
            $Nome = $request->input('Nome');
            $SSID = $request->input('SSID');
            $Canal = $request->input('Canal');
            $Coordenada = $request->input('Coordenada');
            $Fita = $request->input('Fita');

            $data = DB::select('SELECT * FROM nwtdevicesz WHERE id = :id', [
                'id' => $id
            ]);

            if(count($data) > 0 ) {
                
                DB::update('UPDATE nwtdevicesz SET IP = :IP WHERE id = :id', [
                    'id' => $id,
                    'IP' => $IP,
                    
                ],

                DB::update('UPDATE nwtdevicesz SET Nome = :Nome WHERE id = :id', [
                    'id' => $id,
                    'Nome' => $Nome,
                    
                ]),

                DB::update('UPDATE nwtdevicesz SET SSID = :SSID WHERE id = :id', [
                    'id' => $id,
                    'SSID' => $SSID,
                    
                ]),

                DB::update('UPDATE nwtdevicesz SET Canal = :Canal WHERE id = :id', [
                    'id' => $id,
                    'Canal' => $Canal,
                    
                ]),

                DB::update('UPDATE nwtdevicesz SET Coordenada = :Coordenada WHERE id = :id', [
                    'id' => $id,
                    'Coordenada' => $Coordenada,
                    
                ]),

                DB::update('UPDATE nwtdevicesz SET Fita = :Fita WHERE id = :id', [
                    'id' => $id,
                    'Fita' => $Fita,
                    
                ])
            
            
            );
      
        } 

        return redirect()->route('raiz');
    }

    public function deletar($id){
        DB::delete('DELETE FROM nwtdevicesz WHERE id = :id', [
            'id' => $id
        ]);

        return redirect()->route('raiz'); 
    }

    public function done() {

    }
}
