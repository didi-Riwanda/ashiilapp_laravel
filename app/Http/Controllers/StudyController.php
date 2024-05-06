<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.study.index', [
            'studies' => Study::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.study.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:studies|max:255',
            'image' => 'image|file|max:1024',
            'description' => 'max:255',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('study-images');
        }

        Study::create($validatedData);

        return redirect('/studies')->with('success', 'Data has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Study $study)
    {
        return view('dashboard.study.show', [
            'study' => $study
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Study $study)
    {
        return view('dashboard.study.edit', [
            'study' => $study
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Study $study)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'description' => 'max:255',
        ];

        if ($request->slug != $study->slug) {
            $rules['slug'] = 'required|unique:studies|max:255';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {

            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('study-images');
        }

        $study->update($validatedData);

        return redirect('/studies')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Study $study)
    {
        if ($study->image) {
            Storage::delete($study->image);
        }

        $study->delete();

        return redirect('/studies')->with('success', 'Data has been deleted');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Study::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
