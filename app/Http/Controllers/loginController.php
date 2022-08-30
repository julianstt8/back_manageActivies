<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function validateUser()
    {
        try {
            $data = '1';
            return response()->json(['status' => 1, 'message' => $data]);
        } catch (\Throwable $th) {
            if ($th->getMessage() !== null) {
                return response()->json(['status' => 0, 'message' => $th->getMessage() . " en la línea " . $th->getLine()]);
            } else {
                return response()->json(['status' => 0, 'message' => $th]);
            }
        }
    }
}
