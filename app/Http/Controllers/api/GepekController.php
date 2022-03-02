<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Eszkoz_tipus;

class GepekController extends Controller
{
    /*Minden vissza ad json-ba*/
    public function index()
    {
        return response()->json(Eszkoz_tipus::all());
    }

    /*Egy dologra keres rá, a bekért paraméterre

        $queryString = $request->query();
        foreach ($queryString as $key => $value) {
            $explodedKey=explode('_',$key);
            $column=$explodedKey[0];
            $expression=$explodedKey[1];
            $tasks=Task::with('user')->where($column, $expression, '%' . $value . '%')->get();
        }
        return $tasks;
    */
    public function search(Request $request)
    {

    }

    /*Nem tudom*/
    public function create()
    {

    }

    /*Új adatottagot visz fel, objektumot lehet a rquest-nek átadni
        $task=new Task();
        $task->title=$request->title;
        $task->description=$request->description;
        $task->end_date=$request->end_date;
        $task->userId=$request->userId;
        $task->status=$request->status;

        $task->save();
    */
    public function store(Request $request)
    {

    }

    /*Adattagot mutat meg id alapjá
        $task=Task::find($taskId);
        return response()->json($task);
    */
    public function show($taskId)
    {

    }

    /*Nem tudom*/
    public function edit(Eszkoz_tipus $task)
    {

    }

    /*Adattagot változtat meg, objektumot lehet átadni a requestnek, az id-nak a konkrét adattag id-ját amit meg akarunk változtatni
        $task=Task::find($taskId);
        $task->title=$request->title;
        $task->description=$request->description;
        $task->end_date=$request->end_date;
        $task->status=$request->status;
        $task->save();
    */
    public function update(Request $request, $taskId)
    {

    }

    /*Id alapján adattagot lehet törölni
        $task=Task::find($taskId);
        $task->delete();
    */
    public function destroy($taskId)
    {

    }

    /*Rendezni, a request a rendezési elvet várja
        $column = $request->_sort;
        if ($request->has('_order')){
            $order=$request->_order;
            $task=Task::with('user')->orderBy($column, $order)->get();
        }
        else{
            $task=Task::with('user')->orderBy($column, 'asc')->get();
        }
        return response()->json($task);
    */
    public function sortBy(Request $request)
    {

    }

    /*Nem tudom
        $tasks=Task::with('user')->get();
        return $tasks;
    */
    public function expand()
    {

    }
}
