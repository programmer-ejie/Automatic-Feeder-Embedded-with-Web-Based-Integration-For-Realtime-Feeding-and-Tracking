<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserController extends Controller
{
    public function updateProfile(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gmail' => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'profile_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $user = Auth::user();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }


        // Update other profile details
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->gmail = $request->gmail;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }


    public function deleteProfile(Request $request)
    {
        $user = User::find($request->user_id);

        if ($user) {
            $user->delete();
            return redirect()->route('toLandingPage');
        }

        return redirect()->back()->with('error', 'User not found.');
    }
}
