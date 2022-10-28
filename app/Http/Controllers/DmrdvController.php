<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\Dmrdv;
use App\Models\Notif;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
class DmrdvController extends Controller
//formulaire labo
{
    protected $redirectTo = RouteServiceProvider::HOME;
    public function formuser()
    {

         if (auth()->guest())
         {
             return redirect('/login')->withErrors([ 'password' => "Vous devez être connecté pour voir cette page.",]);
         }else
             return view('formulaire');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'date_naiss'=>['required','date'],
            'tel'=>['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'date'=>['required','date'],
            'choix'=>['required','enum'],
            'heure'=>['required','integer'],
            'prelevement'=>['required','string'],
            'localisation'=>['required','string'],
            'genre'=>['required','enum'],
            //'file2'=>['','string'],
            'file'=>['','string']



        ]);
    }

    public function store1(Request $request)
    {
        Dmrdv::create([
            'user_id' => Auth::user()->id,
            'nom' => $request->nom,
            'prenom' =>$request->prenom,
            'email' => $request->email,
            'date_naiss'=>$request->date_naiss,
            'tel'=>$request->tel,
            'date'=>$request->date,
            'choix'=>$request->choix,
            'heure'=>$request->heure,
            'prelevement'=>$request->prelevement,
            'localisation'=>$request->localisation,
           // 'file2'=>$request->file2,
             'file'=>$request->file,
            'genre'=>$request->genre

        ]);
        return view('/formulaire');
    }

    public function dom()
    {
        $dmrdvs = Dmrdv::where('choix','=','domicile')->get();
        return view('dmrdv.dom',compact('dmrdvs'));
    }
    public function dom2()
    {
        $dmrdvs = Dmrdv::where('choix','=','domicile')->get();
        return view('dmrdv.dom2',compact('dmrdvs'));
    }
    public function labo()
    {
        $dmrdvs = Dmrdv::where('choix','=','laboratoire')->get();
        return view('dmrdv.labo',compact('dmrdvs'));
    }
    public function store(Request $request)
    {
        Dmrdv::create([
            'user_id' => Auth::user()->id,
            'nom' => $request->nom,
            'prenom' =>$request->prenom,
            'email' => $request->email,
            'date_naiss'=>$request->date_naiss,
            'tel'=>$request->tel,
            'date'=>$request->date,
            'choix'=>$request->choix,
            'heure'=>$request->heure,
            'prelevement'=>$request->prelevement,
            'localisation'=>$request->localisation,
            //'file2'=>$request->file2,
            //'file'=>$request->file,
            'genre'=>$request->genre
        ]);
        return redirect()->route('dmrdv.dom');
    }
    public function create1()
    {
        return view('dmrdv.create1');
    }
    public function show($id)
    {
        $dmrdvs = Dmrdv::find($id);
        return view('dmrdv.show',compact('dmrdvs'));
    }
    public function edit(Dmrdv $dmrdv)
    {
        return view('dmrdv.edit',compact('dmrdv'));
    }
    public function update(Request $request, Dmrdv $dmrdv)
    {
        $dmrdv->update([
            'nom' => $request->nom,
            'prenom' =>$request->prenom,
            'email' => $request->email,
            'date_naiss'=>$request->date_naiss,
            'tel'=>$request->tel,
            'date'=>$request->date,
            'choix'=>$request->choix,
            'heure'=>$request->heure,
            'prelevement'=>$request->prelevement,
            'localisation'=>$request->localisation,
           // 'file2'=>$request->file2,
            'file'=>$request->file,
            'genre'=>$request->genre
        ]);
        return redirect()->route('dmrdv.dom');

    }
 
    public function destroy(Dmrdv $dmrdv)
    {
        $dmrdv->delete();
        return redirect()->route('dmrdv.labo');
    }

    public function createf($id)
    {
        $dmrdv = Dmrdv::find($id);
        return view('createf',compact('dmrdv'));
    }

    public function storef($id,Request $request)
    {
        $dmrdv = Dmrdv::find($id);
        $request->validate(['file' => 'required|mimes:doc,docx,xlx,csv,pdf|max:1024']);

        $file_name = time().'.'.$request->file->extension();

        $request->file->move(public_path('file_uploads'), $file_name);

        $dmrdv->update(['file'=> $file_name]);
        $notif= Notif::create([
            'user_id' => $dmrdv->user_id,
            'dmrdv_id' => $id
        ]);

        return back()
            ->with('success','Successfully uploaded a file!');

    }
    public function download($file_name)
    {
      /*
    if (file_exists($request)) {

         return Storage::download('1652459639.pdf');
    } else {
        echo('File not found.');
    }*/

     return response()->download(public_path('file_uploads/'.$file_name));

    }
    public function analyse()//table of all the patients
    {
        $dmrdvs = Dmrdv::get();
       return view('analyse',compact('dmrdvs'));
    }
    public function resultat()//table of the auth patient
    {
        $dmrdvs = Dmrdv::where('user_id','=',Auth::user()->id)->get();
        return view('resultat',compact('dmrdvs'));
    }
}
