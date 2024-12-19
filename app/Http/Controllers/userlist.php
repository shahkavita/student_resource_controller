<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class userlist extends Controller
{
    //
    public function show()
    {
        $s1=DB::table('employees')->select()->get();
        return view('userlist',['data'=>$s1]);

    }
    public function registeruser(request $req)
    {
       $language=collect($req->lang)->implode(',');
        $s1=DB::table('employees')

                ->insert([
                    'name'=>$req->name,
                    'email'=>$req->email,
                    'dob'=>$req->dob,
                    'gender'=>$req->gender,
                    'phone'=>$req->phone,
                    'city'=>$req->city,
                    'language' => $language
                ]);
        if($s1)
        {
            return redirect()->route("userlist");
        }
        else
        {
            echo "<h1>Record Not inserted!!</h1>";
        }
    }
    public function deleteuser(string $id)
    {
        $s1=DB::table('employees')
            ->where('id',$id)
            ->delete();

            if($s1)
            {
                return redirect()->route("userlist");
            }
            else
            {
                echo "<h1>Record Not Deleted!!</h1>";
            }

    }
    public function updateuser(string $id)
    {
       
        $s1=DB::table('employees')
            ->where('id',$id)
            ->get();
           // $language=explode(',',$s1->language);
      if($s1)
        {
            return view('updateform',
            ['data'=>$s1
            ]);
        }
        else
        {
            echo "<h2>No Data Found!!</h2>";
        }
       
    }
    public function update_user(Request $req,string $id)
    {
        $language=collect($req->lang)->implode(',');
        $s1=DB::table('employees')
            ->where('id',$id)
            ->update([
                    'name'=>$req->name,
                    'email'=>$req->email,
                    'dob'=>$req->dob,
                    'gender'=>$req->gender,
                    'phone'=>$req->phone,
                    'city'=>$req->city,
                    'language' => $language
            ]);
          
      if($s1)
        {
            return redirect()->route("userlist");
        }
        else
        {
            echo "<h2>No Data Found!!</h2>";
        }
       
    }
    
}
