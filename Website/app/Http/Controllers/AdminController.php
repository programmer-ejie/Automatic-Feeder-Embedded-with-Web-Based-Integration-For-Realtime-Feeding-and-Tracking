<?php

namespace App\Http\Controllers;
use App\Models\MachineList;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  
    public function toDashboard(){
            return view('Admin.dashboard');
    }
    public function toManage() {
        $machineLists = MachineList::all();
    
        // Prepare feeding schedule array for JavaScript
        $scheduledFeedings = $machineLists->map(function ($machine) {
            return [
                'id' => $machine->id,
                'ip_address' => $machine->ip_address,
                'time' => optional($machine->scheduled_time)->format('H:i'), // safely format the time
            ];
        });
    
        return view('Admin.manage', compact('machineLists', 'scheduledFeedings'));
    }
    

    public function toLogs(){
        return view('Admin.logs');
    }

    public function toProfile(){
        return view('Admin.profile');
    }
}
