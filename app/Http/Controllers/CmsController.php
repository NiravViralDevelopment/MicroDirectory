<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cms;

class CmsController extends Controller
{
    public function index()
    {
        $pages = Cms::latest()->paginate(10);
        return view('cms.index', compact('pages'));
    }

    public function create()
    {
        return view('cms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable',
            'page_title' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        Cms::create($request->all());

        return redirect()->route('cms.index')->with('message', 'Page created successfully.');
    }

    public function show(Cms $cms)
    {
        return view('cms.show', compact('cms'));
    }

    public function edit(Cms $cms)
    {
        return view('cms.edit', compact('cms'));
    }

    public function update(Request $request, Cms $cms)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable',
            'page_title' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $cms->update($request->all());

        return redirect()->route('cms.index')->with('message', 'Page updated successfully.');
    }

    public function destroy(Cms $cms)
    {
        $cms->delete();

        return redirect()->route('cms.index')->with('message', 'Page deleted successfully.');
    }
}
