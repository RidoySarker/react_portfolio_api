<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeModel;
class HomeController extends Controller
{
    public function hometop()
    {
    	$data = HomeModel::select('home_title','home_subtitle')->get();
    	return $data;
    }
    public function totalproject()
    {
    	$data = HomeModel::select('total_project','total_client')->get();
    	return $data;
    }

    public function video()
    {
    	$data = HomeModel::select('video_description','video_url')->get();
    	return $data;
    }

    public function techdes()
    {
    	$data = HomeModel::select('tech_description')->get();
    	return $data;
    }

}
