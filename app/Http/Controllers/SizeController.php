<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
class SizeController extends Controller
{
    public function index(): View
    {
        $sizes = Size::all();
        return view('dashboard.sizes.index', compact('sizes'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): View
    {
        return view('dashboard.sizes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|unique:sizes,name',
        ]);

        Size::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('sizes')->with('success', 'Size created successfully.');
    }

    public function show($id): View
    {

        $size = Size::find($id);
        return view('dashboard.sizes.show',compact('size'));
    }

    public function edit($id): View
    {
        $size = Size::findOrFail($id);
        return view('dashboard.sizes.edit', compact('size'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required|unique:sizes,name,' . $id,
        ]);

        $size = Size::findOrFail($id);
        $size->update([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('sizes')->with('success', 'Size updated successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        $size = Size::findOrFail($id);
        $size->delete();

        return redirect()->route('sizes')->with('success', 'Size deleted successfully.');
    }
}
