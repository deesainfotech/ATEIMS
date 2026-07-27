<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstitutionController extends Controller
{
    public function index()
    {
        $institutions = Institution::latest()->paginate(10);

        return view('institutions.index', compact('institutions'));
    }

    public function create()
    {
        return view('institutions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'institution_code' => 'required|unique:institutions',
            'institution_name' => 'required|max:255',
            'institution_type' => 'required|max:100',
            'affiliation' => 'nullable|max:255',
            'address' => 'nullable',
            'city' => 'nullable|max:100',
            'state' => 'nullable|max:100',
            'country' => 'nullable|max:100',
            'postal_code' => 'nullable|max:20',
            'phone' => 'nullable|max:20',
            'email' => 'nullable|email',
            'website' => 'nullable|url',
            'principal_name' => 'nullable|max:255',
            'established_year' => 'nullable|integer',
            'logo' => 'nullable|image|max:2048',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('institutions', 'public');
        }

        Institution::create($validated);

        return redirect()
            ->route('institutions.index')
            ->with('success', 'Institution created successfully.');
    }

    public function show(Institution $institution)
    {
        return view('institutions.show', compact('institution'));
    }

    public function edit(Institution $institution)
    {
        return view('institutions.edit', compact('institution'));
    }

    public function update(Request $request, Institution $institution)
    {
        $validated = $request->validate([
            'institution_code' => 'required|unique:institutions,institution_code,' . $institution->id,
            'institution_name' => 'required|max:255',
            'institution_type' => 'required|max:100',
            'affiliation' => 'nullable|max:255',
            'address' => 'nullable',
            'city' => 'nullable|max:100',
            'state' => 'nullable|max:100',
            'country' => 'nullable|max:100',
            'postal_code' => 'nullable|max:20',
            'phone' => 'nullable|max:20',
            'email' => 'nullable|email',
            'website' => 'nullable|url',
            'principal_name' => 'nullable|max:255',
            'established_year' => 'nullable|integer',
            'logo' => 'nullable|image|max:2048',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('logo')) {

            if ($institution->logo) {
                Storage::disk('public')->delete($institution->logo);
            }

            $validated['logo'] = $request->file('logo')->store('institutions', 'public');
        }

        $institution->update($validated);

        return redirect()
            ->route('institutions.index')
            ->with('success', 'Institution updated successfully.');
    }

    public function destroy(Institution $institution)
    {
        if ($institution->logo) {
            Storage::disk('public')->delete($institution->logo);
        }

        $institution->delete();

        return redirect()
            ->route('institutions.index')
            ->with('success', 'Institution deleted successfully.');
    }
}