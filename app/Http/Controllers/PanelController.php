<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function dashboard()
    {
        $data = [
            'pages' => 'Dashboard',
        ];
        return view('panelpage.dashboard', $data);
    }
}
