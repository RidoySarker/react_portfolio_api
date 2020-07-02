<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectModel;
class ProjectController extends Controller
{
    public function selecthome()
    {
    	$data = ProjectModel::limit(3)->get();
    	return $data;
    }
    public function selectall()
    {
    	$data = ProjectModel::all();
    	return $data;
    }
    public function selectproject($projectid)
    {	
        $id=$projectid;
        $result=ProjectModel::where(['id'=>$id])->get();
        return $result;
    }
}
