<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InformationModel;
class InformationController extends Controller
{
    public function selectall()
    {
    	$data = InformationModel::all();
    	return $data;
    }
}
