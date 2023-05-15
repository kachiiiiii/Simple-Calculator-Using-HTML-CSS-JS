@extends('layouts.app')
@section('content')
    <section class="text-center w-4/6 mx-auto">
        <h2 class="text-2xl p-3">Add post</h2>
@if ($errors->any())
   @foreach ($errors->all as $error )
       <div class="bg-green-500">{{ $error }}</div>
   @endforeach
@endif
        <form action="{{ route('crud.update',$crud->id) }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div>
                <label for="title" class="block"> Post Title</label>
                <input type="text" name="title" id="title" class="block py-2" value="{{ $crud->title }}">
            </div>
            <div>
                <label for="body" class="block"> Post Content</label>
                <textarea name="body" id="body" cols="10" rows="10" class="border py-2 px-4 "
                    placeholder="Enter the title">{{ $crud->title }}</textarea>
            </div>
            <div>
                <label for="summary" class="block"> Summary </label>
                <input type="summary" name="summary" id="summary" class="block py-2 px-4 border" value="{{ $crud->summary }}">
            </div>
            <div>
                <label for="title" class="block"> Category</label>
                <select name="category" id="category">
                    <option value="Pol">Politics</option>
                    <option value="Ent">Entertainment</option>
                    <option value="Gos">Gossip</option>
                </select>
            </div>
            <div>
                <label for="pic" class="block"> Post Image</label>
                <input type="file" name="pics" id="pics" class="py-2 px-4" accept="image/*">
            </div>
            <button class="bg-cyan-500/50 rounded text-black border-spacing-2 px-4 py-2 m-10" type="submit">add
                post</button>
        </form>
    </section>
@endsection