<?php

namespace App\Http\Controllers;

use App\Company;

class CompaniesController extends Controller
{
    public function index()
    {
        return view('admin.companies.index');
    }

    public function show($id) {
        return Company::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $company = Company::findOrFail($id);
        $company->update($request->all());

        return $company;
    }

    public function store(Request $request) {
        $company = Company::create($request->all());
        return $company;
    }

    public function destroy($id) {
        $company = Company::findOrFail($id);
        $company->delete();
        return '';
    }
}