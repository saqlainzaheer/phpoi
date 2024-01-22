<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Dealership;
use App\Models\Job;
use App\Models\Contact;
use App\Models\JobPosition;
use App\Models\Product;
use App\Models\ProductMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $contactCount = Contact::count();
        $jobCount = JobPosition::count();
        $messageCount = Contact::count();
        $jobRequestCount = Job::count();

        return view('admin.dashboard', compact('contactCount', 'jobCount', 'messageCount', 'jobRequestCount'));
    }

    public function getDealershipSubmissions()
    {
        $dealers = Dealership::all();
        return view('admin.users.list', compact('dealers'));
    }

    public function getContacts()
    {
        $contacts = Contact::all();
        return view('admin.users.list-contacts', compact('contacts'));
    }

    public function getMessages()
    {
        $messages = ProductMessage::all();
        return view('admin.users.list-messages', compact('messages'));
    }

    public function destroyContact($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('success', 'Contact deleted successfully');
    }

    public function destroyMessage($id)
    {
        $contact = ProductMessage::find($id);
        $contact->delete();
        return redirect()->back()->with('success', 'Message deleted successfully');
    }

    public function destroyDealership($id)
    {
        $contact = Dealership::find($id);
        $contact->delete();
        return redirect()->back()->with('success', 'Dealership request deleted successfully');
    }

   

   
}
