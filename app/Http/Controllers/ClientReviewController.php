<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientReviewModel;
class ClientReviewController extends Controller
{
    public function selectall()
    {
    	$result = ClientReviewModel::all();
    	return $result;
    }
}
