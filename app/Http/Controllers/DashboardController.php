<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function toggleMaintenance(Request $request)
    {
        // Toggle maintenance mode
        $current = config('app.maintenance', false);
        $newStatus = !$current;

        // Opslaan in config file of .env (voor eenvoudig voorbeeld gebruik config cache)
        file_put_contents(base_path('.maintenance'), $newStatus ? '1' : '0');

        return redirect()->back()->with('status', 'Maintenance status gewijzigd!');
    }
}
