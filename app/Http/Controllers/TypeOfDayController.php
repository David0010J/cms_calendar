<?php

namespace App\Http\Controllers;

use App\Models\TypeOfDay;
use Illuminate\Http\Request;

class TypeOfDayController extends Controller
{
    public function index()
    {
        $types = TypeOfDay::all();
        return view('type_of_days.index', compact('types'));
    }

    public function create()
    {
        return view('type_of_days.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string',
            'day_status' => 'required|in:good,bad'
        ]);

        TypeOfDay::create($validated);
        return redirect()->route('type-of-days.index');
    }

    public function show($id)
    {
        $type = TypeOfDay::findOrFail($id);
        return view('type_of_days.show', compact('type'));
    }

    public function edit($id)
    {
        $type = TypeOfDay::findOrFail($id);
        return view('type_of_days.edit', compact('type'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'type' => 'required|string',
            'day_status' => 'required|in:good,bad'
        ]);

        $type = TypeOfDay::findOrFail($id);
        $type->update($validated);
        return redirect()->route('type-of-days.index');
    }

    public function destroy($id)
    {
        $type = TypeOfDay::findOrFail($id);
        $type->delete();
        return redirect()->route('type-of-days.index');
    }
}
