<?php
namespace App\Http\Controllers;
use App\Models\Member;

class ListController extends Controller
{
    function showData(){
        $data= Member::all();
        return view('list',['collection'=>$data]);
    }

    function deleteData($id){
        $data = Member::find($id);
        $data->delete();
        return redirect('list');
    }
}