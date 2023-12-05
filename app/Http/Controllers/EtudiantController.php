<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    //
    public function liste_etudiant(){
        
        $etudiants = Etudiant::paginate(4);
        
        return view('etudiant.liste',
                    compact(
                        'etudiants'
                    ));
    }
    
    public function ajouter_etudiant(){
        return view('etudiant.ajouter');
    }
    
    public function ajouter_etudiant_traitement(Request $request){
        //bloc pour mettre un message si un champ est vide
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
            'photo' => 'required',
        ]);
        $etudiant= new Etudiant();
        $etudiant->nom= $request->nom;
        $etudiant->prenom= $request->prenom;
        $etudiant->classe= $request->classe;

        $etudiant->save();
        
        return redirect('/ajouter')->with('status', 'L\'eleve a bien ete enregister avec succes.');

        
    }
    
    //update etudiant
    public function update_etudiant($id){
        
        $etudiants= Etudiant::find($id);
        
        
        return view('etudiant.update',
                    compact(
                        'etudiants'
                    ));
        
        
    }
    
    public function update_etudiant_traitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);
        $etudiant=Etudiant::find($request->id);
        $etudiant->nom= $request->nom;
        $etudiant->prenom= $request->prenom;
        $etudiant->classe= $request->classe;
        $etudiant->update();
        return redirect('/etudiant')->with('status', 'L\'eleve a bien ete modifier avec succes.');

    }
    //delete function
    public function delete_etudiant($id){
        
        $etudiant=Etudiant::find($id);
        $etudiant->delete();
        
        return redirect('/etudiant')->with('status', 'L\'eleve a bien ete suprimer avec succes.');

    }
}
