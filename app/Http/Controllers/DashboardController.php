<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $summary = [
            'users' => 12,
            'orders' => 34,
            'revenue' => 1284.50,
        ];

        $recent = [
            ['id' => 101, 'customer' => 'Alice', 'total' => 19.99],
            ['id' => 102, 'customer' => 'Bob', 'total' => 45.50],
            ['id' => 103, 'customer' => 'Carol', 'total' => 12.00],
        ];

        return view('dashboard', compact('summary', 'recent'));
    }
}
