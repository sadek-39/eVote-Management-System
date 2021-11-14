<?php

namespace App\Http\Controllers;

use App\Imports\VoterImport;
use Exception;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

class ImportExportController extends Controller
{
    public function index()
    {
        return view('user.import');
    }
    public function Import(Request $request)
    {
        if(isset($request->file)){
            try{
                $import=Excel::import(new VoterImport, $request->file('file')->store('temp'));
            return redirect('/import')->with('response','import success');
            }catch(Throwable $e){
                return redirect('/import')->with('resposne',report($e));
            }
            
        }else{
            return back()->with('response','please insert a file');
        }
    }
}
