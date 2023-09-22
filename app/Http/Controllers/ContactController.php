<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Repositories\CompanyRepository;
use App\Models\Contact;

class ContactController extends Controller
{
    public function __construct(protected CompanyRepository $company){

    }

    public function index(CompanyRepository $company, Request $request)
    {
        $companies= $company->pluck();
        $contacts = Contact::latest()->paginate(10);
        return view('contacts.index', compact('contacts', 'companies'));
    }

    public function create(){
        return view('contacts.create');
    }

    public function show($id){
        $contactaa= Contact::findOrFail($id);
        return view('contacts.show')->with('contact', $contactaa);
    }
}