<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function validateUser(Request $request)
    {
        try {
            $parametrization = DB::table('users')->get();
            return response()->json(['status' => 1, 'message' => $parametrization]);
        } catch (\Throwable $th) {
            if ($th->getMessage() !== null) {
                return response()->json(['status' => 0, 'message' => $th->getMessage() . " en la línea " . $th->getLine()]);
            } else {
                return response()->json(['status' => 0, 'message' => $th]);
            }
        }
    }
}
