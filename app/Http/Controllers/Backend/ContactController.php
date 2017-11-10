<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('admin.contact.index');
    }

    public function getContactByAttribute(Request $request)
    {
        $contacts = Contact::orderBy('id', 'desc');

        return \Datatables::of($contacts)
            ->addColumn('file', function($contact) {
                return '<a data-toggle="modal" href="#list-file" class="btn btn-success">Xem</a>';
            })
            ->addColumn('action', function($contact) {

            })
            ->make(true);
    }
}
