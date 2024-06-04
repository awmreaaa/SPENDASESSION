<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        echo "<h1>Halo, Selamat Datang Di SpendaSession</h1>";
        echo "<a href='/logout'>Logout>></a>";
    }

    function gurubk(){
        return view('/dashboard');
        echo "<a href='/logout'>Logout>></a>";
    }

    function gurupengajar(){
        echo "<h1>Halo, Selamat Datang Di SpendaSession Sebagai Admin</h1>";
        echo "<a href='/logout'>Logout>></a>";
    }
}