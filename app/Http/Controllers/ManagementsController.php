<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Management;
use DB;

class ManagementsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     *@return \Illuminate\Http\Response
     */
    public function index()
    {
        $managements = Management::orderBy('created_at', 'desc')->paginate(10);
        return view('management.index')->with('managements', $managements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'course' => 'required',
            'id_no' => 'required'
      ]);

         $management = new Management;
         $management->first_name = $request->input('first_name');
         $management->last_name = $request->input('last_name');
         $management->dob = $request->input('dob');
         $management->course = $request->input('course');
         $management->id_no = $request->input('id_no');
         $management->save();

         return redirect('/management')->with('success', 'Successfully Added');
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
        // $managements = Management::find($id);

        // //check for correct user to to do some action
        // if(auth()->user()->id !==$managements->user_id)
        // {
        //     return redirect('/managements')->with('error', 'Unauthorized Access');    
        // }
        // return view('managements.edit')->with('managements', $managements);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $this->validate($request, [
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'dob' => 'required',
        //     'course' => 'required',
        //     'id_no' => 'required'
            $data = request()->validate()([
                'first_name' => 'required',
                'last_name' => 'required',
                'dob' => 'required',
                'course' => 'required',
                'id_no' => 'required'
            ]);
      
        //  $management = Management::find($id == 1);
        //  $management->first_name = $request->input('first_name');
        //  $management->last_name = $request->input('last_name');
        //  $management->dob = $request->input('dob');
        //  $management->course = $request->input('course');
        //  $management->id_no = $request->input('id_no');
        //  $management->save(); 

        $user->management->update($data);
        return redirect('/management')->with('success', 'Post Updated Successfully');
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
