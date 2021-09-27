<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $makanan = DB::table('makanan')
            ->get();

        $data = [
            'makanan' => $makanan 
        ];
        return view ('makanan', $data);
            //dd($users);
    }
}