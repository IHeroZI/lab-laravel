<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $companyName = $request->query('name', 'Our Company');
        $foundedYear = $request->query('year', '2025');
        $teamSize = $request->query('team', '10');
        $yearsInBusiness = date('Y') - intval($foundedYear);

        return view('about', compact('companyName', 'foundedYear', 'teamSize', 'yearsInBusiness'));
    }
}