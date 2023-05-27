<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category(Request $request)
    {
        // 検索条件を取得する
        $name = $request->input('fullname');
        $gender = $request->input('gender');
        $email = $request->input('email');

        // 検索処理を実行して結果を取得する
        $results = Category::where('fullname', $name)
            ->where('gender', $gender)
            ->where('email', $email)
            ->get();

        // ビューに $results 変数を渡す
        return view('category', ['results' => $results]);
    }
}
