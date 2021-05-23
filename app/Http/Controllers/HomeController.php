<?php

namespace App\Http\Controllers;
use App\Http\Controllers\RecordController;

use App\Models\Company;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function company(Request $request)
    {


        $input = $request->all();
        dd($input);
        $lastId = Company::insertGetId($input);
        $recordControler = new RecordController();
// Use other controller's method in this controller's method
       $id =  $recordControler->employee($lastId);
       dd($id);

    }
}
