<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = students::all();
        return view('admin.student.index',[
            'all_data'      => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//Start Validate
        $this->validate($request,[
            'name'      => 'required',
            'email'      => 'required|email|unique:students',
            'cell'      => 'required|starts_with:+880,00880,+964,07,01|unique:students',
            'gender'      => 'required',
        ],[
            'email,required'     => 'This Is Not Email',
        ]);

//Image Upload
        if($request -> hasFile('photo')){
            $img = $request -> file('photo');
            $file_name = md5(time().rand()) . '.' . $img -> clientExtension();
            $img -> move(public_path('photos/') , $file_name);
        }else{
           $file_name = '';
        }

//Data Cteate

        students::create([
            'name'          => $request -> name,
            'email'         => $request -> email,
            'cell'          => $request -> cell,
            'department'    => $request -> department,
            'gender'        => $request -> gender,
            'photo'        => $file_name,
        ]);

        return back() -> with('success', 'Accounte Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = students::find($id);
        return view('admin.student.show',[
            'student'   => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = students::find($id);
        return view('admin.student.edit',[
            'student_update'       =>  $data
        ]);
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

        //Data Validate
        $this->validate($request,[
            'name'      => 'required',
            'email'      => 'required|email|unique:students',
            'cell'      => 'required|starts_with:+880,00880,+964,07,01|unique:students',
            'gender'      => 'required',
        ],[
            'email,required'     => 'This Is Not Email',
        ]);
        //image Upload
        if($request -> hasFile('photo')){
            $img = $request -> file('photo');
            $file_name = md5(time().rand()) . '.' . $img -> clientExtension();
            $img -> move(public_path('photos/') , $file_name);
        }else{
           $file_name = '';
        }

        //Data Update
        $update = DB::table('students') -> where('id', $request -> input('cid')) -> update([
            'name' =>    $request -> name,
            'email' =>    $request -> email,
            'cell' =>    $request -> cell,
            'department' =>    $request -> department,
            'gender' =>    $request -> gender,
            'photo' =>    $file_name,
        ]);

        return back() -> with('success', 'Accounte Create Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studen = students::find($id);
        $studen -> delete();
        return back();
    }
}
