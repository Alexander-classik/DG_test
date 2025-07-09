<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = NewsModel::take(3)->orderBy('created_at', 'desc')->get();
        return view('main.index', compact('news'));
    }

    public function all_index()
    {
        $news = NewsModel::all();
        return view('main.allnews', compact('news'));
    }

    public function show($id){
        return view('main.show', ['news' => NewsModel::findOrFail($id)]);
    }

    public function add()
    {
        return view('main.add');
    }

    public function store(Request $request)
    {
        // проверяет на ошибки
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        // добавляет в базу данных данные из формы
        $main = NewsModel::create([
            'name' => $request->name,
            'description' => $request->description,
            'date_public' => date('Y-m-d')
        ]);

        return redirect()->route('/');
    }
    //
}
