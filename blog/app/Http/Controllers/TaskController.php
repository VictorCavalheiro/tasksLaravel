<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{


    function addTask(Request $req){
        
        $task = new Task(['descricao'=>$req->get('descricao'),'data_de_criacao'=>$req->get('data_de_criacao'),'data_de_termino'=>$req->get('data_de_termino'),'finalizada'=>0]);
        $task->save();
        return redirect()->action('TaskController@index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $records = Task::get();
        return view('tasks.list')->with(compact(['records']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $req)
    {
        
    }

    




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
       
    }



   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $todo= Task::find($id);
        if($todo->finalizada<=0){
            $todo->update(array('finalizada' =>     1));
        }
        else if($todo->finalizada>0){
            $todo->update(array('finalizada' =>     0));
        }
        
        return redirect()->action('TaskController@index');
    }
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        
        $todo= Task::find($id);
        $todo->delete();
        return redirect()->action('TaskController@index');
    }
}
