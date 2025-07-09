<?php

namespace App\Http\Controllers;

use App\Models\NewsFeedbacksModel;
use Illuminate\Http\Request;

class NewsFeedbacksController extends Controller
{
    public function add()
    {
        $items = NewsFeedbacksModel::latest()->get();
        return view('fb.add', compact('items'));
    }

    public function store(Request $request)
    {
        // проверяет на ошибки
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'description' => 'required|string',]);

        // добавляет в базу данных данные из формы
        $main = NewsFeedbacksModel::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        return response()->json($main);
    }
}
