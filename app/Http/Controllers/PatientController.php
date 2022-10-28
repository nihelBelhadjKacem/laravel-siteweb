<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    public function listeP()   //la liste des patient
    {
        $patients = Patient::get();
        return view('patient.listeP',compact('patients'));
    }
    public function index()
    {
        return view('patient.listeP');
    }
    public function store(Request $request)
    {
        Patient::create([
            'nom'=> $request->nom,
            'prenom'=>$request->prenom,
            'date_naiss'=> $request->date_naiss,
            'email'=> $request->email,
            'tel'=> $request->tel,
            'genre'=> $request->genre
        ]);
        return redirect()->route('patient.listeP');
    }
    public function create()
    {
        return view('patient.create');
    }
    public function show($id)
    {
        $patients = Patient::find($id);
        return view('patient.show',compact('patients'));

    }
    public function edit(Patient $patient)
    {
        return view('patient.edit',compact('patient'));
    }
    public function update(Request $request, Patient $patient)
    {
        $patient->update([
            'nom'=> $request->nom,
            'prenom'=> $request->prenom,
            'date_naiss'=> $request->date_naiss,
            'email'=> $request->email,
            'tel'=> $request->tel,
            'genre'=> $request->genre
        ]);
        return redirect()->route('patient.listeP');

    }
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patient.listeP');
    }
}

