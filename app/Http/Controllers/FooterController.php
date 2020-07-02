<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FooterModel;
class FooterController extends Controller
{
    public function selectall()
    {
    	$data = FooterModel::all();
    	return $data;
    }
}
