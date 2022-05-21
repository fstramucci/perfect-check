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
            'number' => 'required|integer|min:1',
        ]);
        if ($validator->fails()) {
            return "Only positive integers can be perfect.";
        }

        $number = intval($request->number);
        $sum = 0;

        for ($i = 1; $i < $number; $i += 1) {
            if ($number % $i === 0) {
                $sum += $i;
            }
        }
        if ($sum === $number) {
            return "Number ".$number." is perfect.";
        } else {
            return "Number ".$number." is not perfect.";
        }
    }
}
