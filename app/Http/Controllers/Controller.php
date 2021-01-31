<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {

        return view('welcome');
    }

    public function ajax(Request $request) {
        $at = Carbon::createFromFormat('h:i a', $request->request->get('arrived_time'));
        $et = Carbon::createFromFormat('h:i a', $request->request->get('exit_time'));
        if ($et->lt($at)) {
            $et->addDay();
        }
        $diff = $et->diffInHours($at);
        $res = 0;
        if ($diff > 2) {
            $res += (2 * 2000) + (($diff - 2) * 500);
        } else {
            $res += $diff * 2000;
        }

        return response()->json(['result' => $res, 'diff' => $diff]);
    }
}
