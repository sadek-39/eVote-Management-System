<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\TokenGenerate;
use App\Models\TokenStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class TokenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($token)
    {
        $search_token=TokenStatus::all('token');
        $array=array();
        foreach($search_token as $search_token)
        {
            //echo ($search_token->token);
            
            
            array_push($array,$search_token->token);
        }
        if(in_array($token,$array)){
            return view('vote.panel',['token'=>$token]);

        }else{
            echo "access Denied";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $token="abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        
        $pass=array();
        $alphaLength = strlen($token) - 1; //put the length -1 in cache
        for ($i = 0; $i < 20; $i++) {
            $n = rand(0, $alphaLength);
            $pass[$i] = $token[$n];
        }
        global $tokenString;
        $tokenString=implode($pass);
        //$url='http://'.env('DB_host').':8000/vote-panel/'.$tokenString;
        return $tokenString;
        // return View('generate-token',['token'=>$tokenString]);
    }
    public function sendEmail($id)
    {
        $generated_token=$this->create();
        $url='http://'.env('DB_host').':8000/vote-panel/'.$generated_token;
        //$tokenfromurl=explode('=',$generated_token);        
        $details=[
            'Tilte'=>'Vote Link',
            'body'=>'This is the vote link '.$url
        ];
        //$memberid=$id;
        if($generated_token){
            Mail::to('emailtorubel@gmail.com')->send(new TestMail($details));
            $i=1;
            $j=0;
        }else{
            $i=0;
        }
        $data=[
            'member_id'=>$id,
            'token_generated'=>$i
        ];
        $data__tokenstatus=[
            'token'=>$generated_token,
            'status'=>$j
        ];
        $create=TokenGenerate::create($data);
        $tokenStatus=TokenStatus::create($data__tokenstatus);
        return response()->json("success");

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
