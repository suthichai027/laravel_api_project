<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index() //ผูกกับ Room ชั้นนอก
    {
        return view('room');
    }
}
