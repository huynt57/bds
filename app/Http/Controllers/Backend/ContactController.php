<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('admin.contact.index');
    }

    public function updateInline($id, Request $request)
    {
        $testimonial = Contact::find($id);

        $name = $request->input('name');
        $value = $request->input('value');

        $testimonial->update([
            $name => $value
        ]);

    }

    public function getContactByAttribute(Request $request)
    {
        $contacts = Contact::select(\DB::raw('contacts.*, users.name as agent'))
            ->leftjoin('users', 'contacts.agent_id', '=', 'users.id')
            ->orderBy('id', 'desc');

        return \Datatables::of($contacts)
            ->addColumn('file', function ($contact) {
                return '<a data-toggle="modal" href="#list-file" data-id="'.$contact->id.'" class="btn btn-success list-file-contact">Xem</a>';
            })
            ->editColumn('created_at', function ($contact) {
                return $contact->created_at->format('d/m/Y H:i');
            })
            ->editColumn('status', function ($contact) {
                return '<a href="javascript:;" data-type="select" 
                data-pk="' . $contact->id . '" data-url="' . url('admin/contact/update-inline', ['id' => $contact->id]) . '" 
                data-id="' . $contact->id . '" 
                data-name="status"
                class="editable editable-click"> ' . $contact->status_text . ' </a>';
            })
            ->addColumn('action', function ($contact) {

            })
            ->make(true);
    }

    public function getFile($id)
    {
        $contact = Contact::find($id);
        if($contact)
        {
            $items = $contact->files;
            $files = json_decode($items);
            return view('admin.contact.files', compact('files'))->render();
        }
    }
}
