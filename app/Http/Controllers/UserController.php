<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cakelist;

class UserController extends Controller
{
    public function index(Request $req)
    {
        $search=$req->search ?$req->search:false;
        // dd($search);
        $data= Cakelist::when($search,function($query,$search){
        return $query->where('Name','=',$search);
        })->paginate(4);
        return view('cakedetails',['details'=>$data]);
    }
    public function delete($id)
    {
        $data=Cakelist::find($id);
        $data->delete();
        return redirect('list');
    }
    public function edit($id)
    {
        $data= Cakelist::find($id);
        return view('edit',['data'=>$data]);
    }
    public function enterdb(Request $req)
   {
    $data=Cakelist::find($req->id);
    $data->Name=$req->Name;
    $data->Flavour=$req->Flavour;
    $data->Bakeddate=$req->Bakeddate;
    $data->save();
    return redirect('list');
   }
public function add(Request $req){
    $cakelist=new Cakelist;
    $cakelist->Name=$req->Name;
    $cakelist->Flavour=$req->Flavour;
    $cakelist->Bakeddate=$req->Bakeddate;
    $cakelist->save();
    return redirect('list');
   }
}
