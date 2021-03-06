<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB

class RecordController extends Controller
{
    public function company(Request $request)
    {
        $input = [
           'company_name'=> $request->company_name,
           'company_email'=> $request->company_email,
           'company_phone'=> $request->company_phone,
           'company_city'=> $request->company_city
        ];
        $lastId = Company::create($input);
        $compnyId = $lastId->id;

        $data = $request->rows;
//        dd($compnyId);
        for ($i = 0; $i < count($data); $i++) {
            $result = array_merge($data[$i],array('company_id'=>$compnyId));
//            dd($result);
            DB::table('employees')->insert($result);
        }
        $message = "Data insert";

        return response(json_encode($message));
    }


}
