<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $s1=student::paginate(5);
        return view('studentlist',['data'=>$s1]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('addstudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       /* $s1=new Student;
        $s1->name=$request->name;
        $s1->email=$request->email;
        $s1->phone=$request->phone;
        $s1->gender=$request->gender;
        $s1->course=implode(',',$request->course);
        $s1->city=$request->city;
        $s1->save();*/
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'gender'=>'required',
        ]);
        Student::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'gender'=>$request->gender,
            'course'=>implode(',',$request->course),
            'city'=>$request->city,
        ]);
        return redirect()->route('studentlist.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //
        $s1=student::find($id);
        return view('showstudent',compact('s1'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $s1=student::find($id);
        return view('updatestudent',compact('s1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
      /*  $s1=student::find($id);
        $s1->name=$request->name;
        $s1->email=$request->email;
        $s1->phone=$request->phone;
        $s1->gender=$request->gender;
        $s1->course=implode(',',$request->course);
        $s1->city=$request->city;
        $s1->save();*/
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'gender'=>'required',
        ]);

        $s1=student::where('id',$id)
            ->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'gender'=>$request->gender,
                'phone'=>$request->phone,
                'city'=>$request->city,
                'course'=>implode(',',$request->course),
            ]);
        return redirect()->route('studentlist.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $s1=student::find($id);
        $s1->delete();
        
        return redirect()->route('studentlist.index');
        //
    }
}
