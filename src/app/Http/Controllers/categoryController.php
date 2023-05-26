<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function category()
    {

        // データを取得する処理
        $results = DB::table('contacts')->get();

        // ビューに $results 変数を渡す
        return view('category', ['results' => $results]);
    }
}
