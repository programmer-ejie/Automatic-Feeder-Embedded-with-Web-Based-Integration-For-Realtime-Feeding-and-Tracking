<?php

namespace App\Http\Controllers;

use App\Models\MachineList;
use App\Models\Log as LogModel; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // <-- Add this line

class FeedingController extends Controller
{
    public function feedNow(Request $request)
    {
        // Get the servo number from the button
        $servoNumber = $request->input('servoNumber'); // This will be either 1 or 2
        $ip_address = $request->input('ip_address');
        $id = $request->input('id');
    

        $esp8266Ip = "http://$ip_address/feednow?servo=" . $servoNumber;
       
   
        // Use file_get_contents or curl to send the request to ESP8266
         $response = file_get_contents($esp8266Ip);
            

            // for logs
           // Fetch machine details
                $machine = MachineList::find($id);

                if (!$machine) {
                    return response()->json(['error' => 'Machine not found'], 404);
                }

                $machineName = $machine->machine_name;

                // ✅ Store log in database
                LogModel::create([
                    'machine_name' => $machineName,
                    'message' => "Servo $servoNumber on machine '$machineName' has been successfully triggered for the feeding process."
                ]);

            
        


        //end for logs
    
        // Redirect back to the 'toManage' route after triggering the servo
        return redirect()->route('toManage');
    }
}
