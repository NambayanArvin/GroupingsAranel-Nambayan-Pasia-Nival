<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function dashboard()
    {
        return view('dashboard_view');
    }

    public function resident()
    {
        return view('barangay_residents');
    }

    public function account()
    {
        return view('account_setting');
    }
}