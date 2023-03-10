<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::paginate(10);
        return view('home', ["companies" => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        $company = Company::create($request->all());

        return redirect()->route('home')->with('message', 'Компания ' . $company->name . " успешно создана!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        $notes = Note::where('user_id', '=', Auth::id())->where('company_id', '=', $company->id)->get();
        return view('companies.show', ['company' => $company, 'notes' => $notes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('home')->with(['message' => 'Комания №'. $company->id . ' успешно удалена!']);
    }

}
