<?php

namespace App\Http\Controllers;

use App\Models\Voter;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }
    public function voterList()
    {
        $voter=Voter::where('delete_status','0')->get();
        return view('user.voterlist',['voter'=>$voter]);
    }
    public function deleteVoter($id)
    {
        $deleteVoter=Voter::where('voter_id',$id)->update(['delete_status'=>'1']);
        // foreach ($deleteVoter as $value) {
        //     var_dump($value->delete_status);
        //     $value->delete_status='1';
            
        // }
        // $deleteVoter->store();
        return back();


    }
    public function deleteVoterlist()
    {
        $deletelist=Voter::where('delete_status','1')->get();
        return view('user.deletedVoterlist',['voter'=>$deletelist]);
    }
    public function restore($id)
    {
        $restore=Voter::where('voter_id',$id)->update(['delete_status'=>'0']);
        return back();

    }
}
