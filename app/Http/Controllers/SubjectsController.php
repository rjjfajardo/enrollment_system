<?php

namespace App\Http\Controllers;
use App\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::orderBy('subject_name', 'asc')->paginate(6);
        return view('subject.index')->with('subjects', $subjects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'subject_name' => 'required',
            'room_capacity' => 'required',
            'room_no' => 'required',
            'class_schedule' => 'required'
  
      ]);

         $subject = new Subject;
         $subject->subject_name = $request->input('subject_name');
         $subject->room_capacity = $request->input('room_capacity');
         $subject->room_no = $request->input('room_no');
         $subject->class_schedule = $request->input('class_schedule');   
         $subject->save();

         return redirect('/subject')->with('success', 'Successfully Added');
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
        $management = Management::find($id);


        if(auth()->user()->id !==$management->user_id)
        {
            return redirect('/posts')->with('error', 'Unauthorized Access');    
        }
        $post->delete();
        return redirect('/posts')->with('success', 'Post Deleted');
    }
}
