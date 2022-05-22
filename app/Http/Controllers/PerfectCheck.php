<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PerfectCheck extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->route()->parameters(), [
            'number1' => 'required|integer|min:1',
            'number2' => 'required|integer|gte:number1'
        ]);
        if ($validator->fails()) {
            return "The second number must be bigger than the first number. Only positive integers can be perfect.";
        }
        $number1 = intval($request->number1);
        $number2 = intval($request->number2);

        $perfect_array = [];

        for ($x = $number1; $x <= $number2; $x += 1) {
            $sum = 0;

            for ($i = 1; $i < $x; $i += 1) {
                if ($x % $i === 0) {
                    $sum += $i;
                }
            }
            if ($sum === $x) {
                $perfect_array[] = $x;
            }
        }
        
        return response()->json($perfect_array, 200);
    }
}
