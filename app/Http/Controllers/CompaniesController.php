<?php

namespace App\Http\Controllers;

use App\Company;

use Illuminate\Http\Request;

use App\Http\Requests;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return response()->json($companies);
    }

    public function show($id)
    {
        $company = Company::find($id);

        if(!$company) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($company);
    }
}
