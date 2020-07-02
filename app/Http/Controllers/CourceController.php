<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourceModel;
class CourceController extends Controller
{
   public function selectfour(){
        $data=CourceModel::limit(4)->get();
        return $data;
    }

    public function selectall()
    {
    	$data = CourceModel::all();
    	return $data;
    }

    public function selectdetails($CourseID)
    {
        $id=$CourseID;
        $result=CourceModel::where(['id'=>$id])->get();
        return $result;
    }   
}
