<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewContactController extends Controller
{


    public function index()
    {
        // Retrieve all data from the newcontacts table
        $contacts = DB::table('newcontacts')->get();

        // Pass the data to the view
        return view("admin.newcontacts.list", ['contacts' => $contacts]);
    }
    public function destroy($id)
    {
        try {
            // Find the contact record by its ID and delete it
            DB::table('newcontacts')->where('id', $id)->delete();

            // Optionally, you can add a success message to flash to the session
            return redirect()->back()->with('success', 'Contact deleted successfully!');
        } catch (\Exception $e) {
            // Handle any exceptions that may occur during deletion
            return redirect()->back()->with('error', 'Failed to delete contact. Please try again later.');
        }
    }
    public function store(Request $request)
    {
        try {
            // Retrieve form data
            $full_name = $request->input('full_name');
            $email = $request->input('email');
            $phone_number = $request->input('phone_number');
            $message = $request->input('message');

            // Insert the data into the newcontacts table using Query Builder
            DB::table('newcontacts')->insert([
                'full_name' => $full_name,
                'email' => $email,
                'phone_number' => $phone_number,
                'message' => $message,
                'created_at' => now(),
            ]);

            // Optionally, you can add any further actions here, like sending an email notification
            
            return redirect()->back()->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            // Handle exceptions (e.g., database errors)
            return redirect()->back()->with('error', 'An error occurred while sending the message. Please try again later.');
        }
    }
}