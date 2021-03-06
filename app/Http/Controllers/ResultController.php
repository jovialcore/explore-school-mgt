<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\ResultsImport;
use App\Models\Klass;
use App\Models\Result;
use App\Models\Session;
use App\Models\SubKlass;
use App\Models\Term;

use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ResultController extends Controller
{

    public function index()
    {
    
        return view('backend.result.upload');
    }

    public  function importResult(Request $request)
    {

        $file = $request->file('file');
        Excel::import(new ResultsImport,  $file);
        return back()->with('msg', 'Import Upload was successful');
    }

    public function master()
    {

        $sessions = Session::all();
        $classes = Klass::all();
        // $subClass = SubKlass::all();
        $terms = Term::all();

        return view('backend.result.mastersheet', compact('sessions', 'classes', 'terms'));
    }

    

    public function masterPdfGen(Request $r)
    {
        // dd($r->all());
        $session = Session::find($r->session_id);
        $klass = Klass::find($r->klass_id);
        $term = Term::find($r->term_id);
        $subClass = SubKlass::where('class_id', $r->klass_id)->get();
        $results = Result::where('session_id', $r->session_id)
            ->where('class_id', $r->klass_id)
            ->where('term_id', $r->term_id)
            ->get();
        //'session', 'klass', 'term', 'subClass',

       $pdf = PDF::loadView('backend.result.masterPdf', compact('session', 'klass', 'term', 'subClass', 'results'));
        // $pdf = PDF::loadView('backend.result.masterPdf', compact('results'));
         return $pdf->download('master  result.pdf');

        //  return view('backend.result.masterPdf', compact('session', 'klass', 'term', 'subClass', 'results'));
    }
}
