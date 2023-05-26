<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        // 検索条件を取得する
        $name = $request->input('name');
        $gender = $request->input('gender');
        $email = $request->input('email');

        // 検索処理を実行して結果を取得する（例: Eloquent モデルの利用）
        $results = YourModel::where('name', $name)
            ->where('gender', $gender)
            ->where('email', $email)
            ->get();

        // 結果をビューに渡す
        return view('categories', ['results' => $results]);
    }
}
