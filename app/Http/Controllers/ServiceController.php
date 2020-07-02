<?php

namespace App\Http\Controllers;
use App\ServiceModel;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function selectall()
    {
    	$data = ServiceModel::all();
    	return $data;
    }
}
