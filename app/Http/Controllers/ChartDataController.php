<?php

namespace App\Http\Controllers;
use App\ChartDataModel;
use Illuminate\Http\Request;

class ChartDataController extends Controller
{
    public function selectall(){

    	$result=ChartDataModel::all();
    	return $result;

    }
}
