<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class DashboardController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware for the controller.
     *
     * @return array
     */
    public static function middleware(): array
    {
        return [
          
 

        ];
    }

    public function index()
    {
        // Logic for the dashboard can be added here
        return view('users.dashboard');
    }           
}
