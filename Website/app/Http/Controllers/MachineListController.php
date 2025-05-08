<?php

namespace App\Http\Controllers;

use App\Models\MachineList;
use Illuminate\Http\Request;

class MachineListController extends Controller
{
    public function store(Request $request){

        // Validate the incoming request
        $request->validate([
            'machine_name' => 'required|string|max:255',
            'development_board' => 'required|string|max:255',
            'ip_address' => 'required|string|max:255',
        ]);

        // Create a new record in the machine_lists table
        MachineList::create([
            'machine_name' => $request->machine_name,
            'development_board' => $request->development_board,
            'ip_address'=>$request->ip_address
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Machine added successfully!');
    }


    public function edit(Request $request){
        
        $validated = $request->validate([
            'machineId' => 'required|exists:machine_lists,id', 
            'machine_name' => 'required|string|max:255', 
            'development_board' => 'required|string|max:255', 
            'ip_address' => 'required|string|max:255', 
        ]);
    
       
        $machine = MachineList::find($validated['machineId']);
        
       
        $machine->machine_name = $validated['machine_name'];
        $machine->development_board = $validated['development_board'];
        $machine->ip_address = $validated['ip_address'];
        
        
        $machine->save();
    

        return redirect()->back()->with('success', 'Machine updated successfully!');
    }

    public function delete(Request $request){
        
        $validated = $request->validate([
            'machineId' => 'required|exists:machine_lists,id',
        ]);

        $machine = MachineList::find($validated['machineId']);

        $machine->delete();
        return redirect()->back()->with('success', 'Machine deleted successfully!');

    }

    public function schedule(Request $request)
    {
        $validated = $request->validate([
            'machine_id' => 'required|exists:machine_lists,id',
           'scheduled_time' => 'required',
        ]);

        $machine = MachineList::find($validated['machine_id']);
        $machine->scheduled_time = $validated['scheduled_time'];
        $machine->save();

        return redirect()->back()->with('success', 'Feeding schedule set successfully!');
    }


    
    
}

