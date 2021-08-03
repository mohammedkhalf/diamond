<?php

namespace App\Http\Controllers\Backend\Auth\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\ImportUsers;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use App\Models\Auth\User;

class ImportExcelController extends Controller
{
    public function importClients(Request $request)
    {

    }
}
