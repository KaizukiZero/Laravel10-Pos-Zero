<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }

    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function reservations()
    {
        return view('pages.reservations');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function menupage()
    {
        return view('pages.menu');
    }

    public function delivery()
    {
        return view('pages.delivery');
    }

    public function accounting()
    {
        return view('pages.accounting');
    }

}
