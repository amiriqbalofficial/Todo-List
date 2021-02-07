<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Todo;

class TodosController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo = Todo::orderBy('created_at','desc')->get();
        return view('index',compact('todo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'due' => 'required'

        ]
      );
        $todo = new Todo();
        $todo->title = request()->input('title');
        $todo->content = request()->input('content');
        $todo->due = request()->input('due');

         $todo->save();

              return redirect('/home')->with('message','Todo has inserted successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo  = Todo::findorfail($id);
        return view('show',compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::findorfail($id);
        return view('edit')->with('todo',$todo);
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


        $todo = new Todo();
        $todo->title = request()->input('title');
        $todo->content = request()->input('content');
        $todo->due = request()->input('due');

         $todo->save();

              return redirect('/home')->with('message','Todo has inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::findorfail($id);
        $todo->delete();

      return redirect('/home')->with('message','Todo has deleted successfully');
    }
}
