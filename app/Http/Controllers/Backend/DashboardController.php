<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends AdminController
{
    //
    public function index()
    {

        $users = User::query()->count();
        $houses = House::query()->count();
        $contacts = Contact::count();
        $projects = 3;

        $houseLists = House::latest()->take(5)->get();
        $userLists = User::latest()->take(5)->get();
        $contactLists = Contact::latest()->take(5)->get();
        $projectLists = $houseLists;


        return view('admin.dashboard.index', compact('users', 'houses', 'contacts', 'projects',
            'houseLists', 'userLists',
            'contactLists', 'projectLists'));
    }
}
