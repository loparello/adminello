<?php

namespace App\Http\Controllers\Adminello;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
      $data = [
        'title' => 'Adminello'
      ];
  
      return view('adminello.index', $data);
    }
}
