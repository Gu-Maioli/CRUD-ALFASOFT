<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUpdateContact;
use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\Request;

class contactController extends Controller
{

    public function __construct(protected ContactService $service)
    {
    }

    public function index(Contact $contact)
    {
        $contacts = $contact->getAll();
        return view('index', compact('contacts'));
    }

    public function details(string|int $id, Contact $contact)
    {
        if (!$contact = $contact->getById($id)) {
            return back();
        }

        return view('contact/details', compact(['contact']));
    }

    public function store()
    {
        return view('contact/index');
    }

    public function create(CreateUpdateContact $request, Contact $contact)
    {
        $contact->addContact($request->validated());
        $contacts = $contact->getAll();

        return view('index', compact('contacts'));
    }

    public function edit(string|int $id, Contact $contact)
    {
        if (!$contact = $contact->getById($id)) {
            return back();
        }

        return view('contact/edit', compact(['contact']));
    }

    public function update(CreateUpdateContact $request, string|int $id, Contact $contact)
    {
        if (!$contact = $contact->getById($id)) {
            return back();
        }

        $contact->updateContact($request->validated());

        return redirect()->route('index');
    }

    public function delete(string|int $id, Contact $contact)
    {
        if (!$contact = $contact->find($id)) {
            return back();
        }

        $contact->delete();

        return redirect()->route('index');
    }
}
