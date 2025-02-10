<?php
namespace App\Http\Controllers;

use App\Models\AllEvent;
use Illuminate\Http\Request;

class AllEventController extends Controller
{
    public function index()
    {
        $events = AllEvent::all();
        return view('all_events.index', compact('events'));
    }

    public function create()
    {
        return view('all_events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'name' => 'required|string',
            'lang' => 'required|string|max:5'
        ]);

        AllEvent::create($validated);
        return redirect()->route('all-events.index');
    }

    public function show($id)
    {
        $event = AllEvent::findOrFail($id);
        return view('all_events.show', compact('event'));
    }

    public function edit($id)
    {
        $event = AllEvent::findOrFail($id);
        return view('all_events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'name' => 'required|string',
            'lang' => 'required|string|max:5'
        ]);

        $event = AllEvent::findOrFail($id);
        $event->update($validated);
        return redirect()->route('all-events.index');
    }

    public function destroy($id)
    {
        $event = AllEvent::findOrFail($id);
        $event->delete();
        return redirect()->route('all-events.index');
    }
}

