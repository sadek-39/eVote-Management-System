<?php

namespace App\Imports;

use App\Models\Voter;
use Maatwebsite\Excel\Concerns\ToModel;

class VoterImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Voter([
            'sl_no'=>$row[0],
            'voter_id'=>$row[1],
            'img'=>$row[2],
            'voter_name'=>$row[3],
            'address'=>$row[4],
            'phone'=>$row[5],
            'email'=>$row[6]
        ]);
    }
}
