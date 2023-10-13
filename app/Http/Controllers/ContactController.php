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
        $contacts = Contact::latest()->where(function ($query){
            if ($companyId = request()->query("company_id")) {
                $query->where("company_id",$companyId);
            }
        })->paginate(10);
        return view('contacts.index', compact('contacts', 'companies'));
    }

    public function create(){
        $companies = $this->company->pluck();
        return view('contacts.create', compact('companies'));
    }

    public function show($id){
        $contact= Contact::findOrFail($id);
        return view('contacts.show')->with('contact', $contact);
    }
    public function edit(){
        $companies = $this->company->pluck();
        return view('contacts.edit')->with('companies', $companies);
    //,$contacts
    }
    public function store(Request $request )
    {
        $request->validate(
            [
                'first_name' => 'required|string|max:50',
                'last_name' =>'required|string|max:50',
                'email' =>'required|email',
                'phone' => 'nullable',
                'address' => 'nullable',
                'company_id' => 'required|exists:companies,id'
            ]
            );
        Contact::create($request->all());
        return redirect()->route('contacts.index')->with('message', 'Contact has been added successfully');

    }

}