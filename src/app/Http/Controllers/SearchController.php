<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

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

        $query = Contact::select('id', 'fullname', 'gender', 'email', 'opinion');


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

        $results = $query->paginate(4);

        return view('category', compact('results'));


    }

    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/search')->with('message', 'Todoを削除しました');
    }

}
