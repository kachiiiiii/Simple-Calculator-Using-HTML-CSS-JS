<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use App\Mail\Postmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crud = Crud::all();
        return view('crud.index',['crud'=> $crud]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            'body' => "required",
            'summary' => "required",
            "category" => "required",
            "pics" => "required|image|mimes:jpg, png, gif",
        ]);
        $picName = time() . '.' . $request->pics->extension();
        $request->pics->move(public_path('crud_image'), $picName);
        $crud = Crud::create([
            'title' => $request->title,
            'body' => $request->body,
            'summary' => $request->summary,
            'category' => $request->category,
            'pics' => $picName,
        ]);
        Mail::to('cdimaka@yahoo.com')->send(new Postmail);
        return redirect()->route('crud.index')->with('sucess', 'post added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $crud = Crud::find($id);
        return view('crud.show', ['crud' => $crud]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        $crud = Crud::find($id);
        $request->validate([
            "title" => "required",
            'body' => "required",
            'summary' => "required",
            "category" => "required",
            "pics" => "required|image|mimes:jpg, png, gif",
        ]);
        $picName = time() . '.' . $request->pics->extension();
        $request->pics->move(public_path('crud_image'), $picName);
        $crud->title = $request->title;
        $crud->body = $request->body;
        $crud->summary = $request->summary;
        $crud->category = $request->category;
        $crud->pics = $picName;
        $crud->save();
        return redirect()->route('crud.index')->with('sucess', 'post added successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request)
    {
        $request->validate([
            "title" => "required",
            'body' => "required",
            'summary' => "required",
            "category" => "required",
            "pics" => "required|image|mimes:jpg, png, gif",
        ]);
        $picName = time() . '.' . $request->pics->extension();
        $request->pics->move(public_path('crud_image'), $picName);
        $crud = Crud::create([
            'title' => $request->title,
            'body' => $request->body,
            'summary' => $request->summary,
            'category' => $request->category,
            'pics' => $picName,
        ]);
        return redirect()->route('crud.index')->with('sucess', 'post added successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $crud = Crud::find($id);
        $crud->delete();
        return redirect()->route('crud.index')->with('sucess', 'post added successfully');
    }
}
