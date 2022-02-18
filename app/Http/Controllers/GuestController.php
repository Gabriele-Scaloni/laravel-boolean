<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Postcard;
class GuestController extends Controller
{
    public function home() {

        return view('pages.home');

    }
    public function createPostcard() {

        return view('pages.create-postcard');
    }

    public function storePostcard(Request $request) {

        $data = $request -> validate([
            'sender' => 'required|string',
            'address' => 'required|string',
            'text' => 'required|string',
            'image' => 'required|image',
        ]);

        $imageFile = $data['image']; // é come scrivere $request -> file('image');
        $imageName = rand(100000, 999999).'_'.time() . '.' .$imageFile ->getClientOriginalExtension(); 
        //creao dei numeri random associati al tempo in modo che 
        //anche se ho 2 file con il nome uguale sono assegnati ad un numero ed ad un certo momento
        //2 livelli di randomizzazione per evitare stessi nomi
        //getClientOriginalExtension mi aggiunge l'estensione, jpg in questo caso
        // getClientOriginalName() é una funzione del file di laravel per prendere il nome originale

        //con storeas copio il file, nella cartella public postcards. primo parametro é la folder,
        // cioè postcards, dopodichè nome del file e poi la sezione, cioè cartella public
        $imageFile -> storeAs('/postcards/', $imageName, 'public');
        
        $data['image'] = $imageName;

        $postcard = Postcard::create($data);
        return redirect() -> route('home');
    }

}