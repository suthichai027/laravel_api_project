<?php

namespace App\Http\Controllers;

class CompanyController extends Controller
{
  public function index() //ผูกกับ Company ชั้นนอก
  {
    return view('company');
  }
}
