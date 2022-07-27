<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function seclist()
    {
        $seclist = User::where(function ($q) {
            $q->where('role_id', 4)
                ->orWhere('role_id', 7);
        })->with('latest_active_status')->orderBy('user_name', 'ASC')->get();
        return response()->json($seclist);
    }

    public function branchlist()
    {
        $seclist = User::where('role_id', 5)->orderBy('user_name', 'ASC')->get();
        return response()->json($seclist);
    }
}
