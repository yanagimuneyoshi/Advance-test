<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Collection;
use App\Models\Category;
use App\Models\Contact;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $fullname = $request->input('fullname');
        $gender = $request->input('gender');
        $start = $request->input('datetime-local-start');
        $end = $request->input('datetime-local-end');
        $email = $request->input('email');

        $query = DB::table('contacts')
            ->select('id', 'fullname', 'gender', 'email', 'opinion');

        // 各条件に基づいて検索クエリを追加
        if ($fullname) {
            $query->where('fullname', 'LIKE', '%' . $fullname . '%');
        }
        if ($gender && $gender !== '全て') {
            $query->where('gender', $gender);
        }
        if ($start && $end) {
            $query->whereBetween('created_at', [$start, $end]);
        }
        if ($email) {
            $query->where('email', $email);
        }

        $results = $query->get();



        return view('category', compact('results'));


    }

    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/search')->with('message', 'Todoを削除しました');
    }

}
