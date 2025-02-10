<?php
namespace App\Http\Controllers;

use App\Models\PublicHoliday;
use Illuminate\Http\Request;

class PublicHolidayController extends Controller
{
    public function index()
    {
        // Fetch public holidays in Khmer
        $publicHolidays = PublicHoliday::where('lang', 'kh')->orderBy('date')->get();

        // Debugging the data
        // dd($publicHolidays);

        // Return view with data
        return view('pages.calendar.calendar', ['publicHolidays' => $publicHolidays]);
    }

    public function create()
    {
        return view('public_holidays.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'name' => 'required|string',
            'lang' => 'required|string|max:5',
        ]);

        PublicHoliday::create($validated);
        return redirect()->route('public-holidays.index');
    }

    public function show($id)
    {
        $holiday = PublicHoliday::findOrFail($id);
        return view('public_holidays.show', compact('holiday'));
    }

    public function edit($id)
    {
        $holiday = PublicHoliday::findOrFail($id);
        return view('public_holidays.edit', compact('holiday'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'name' => 'required|string',
            'lang' => 'required|string|max:5',
        ]);

        $holiday = PublicHoliday::findOrFail($id);
        $holiday->update($validated);
        return redirect()->route('public-holidays.index');
    }

    public function destroy($id)
    {
        $holiday = PublicHoliday::findOrFail($id);
        $holiday->delete();
        return redirect()->route('public-holidays.index');
    }
}
