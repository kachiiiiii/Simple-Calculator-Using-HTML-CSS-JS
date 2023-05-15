@extends('layouts.app')
@section('content')
    <section class="w-4/6 mx-auto border border-black text-center">
        <h2 class="text-2xl p-5 font-bold">Add post</h2>
@if ($errors->any())
   @foreach ($errors->all as $error )
       <div class="bg-green-500">{{ $error }}</div>
   @endforeach
@endif
        <form action="{{ route('crud.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="">
                <label for="title" class="block italic text-xl"> Post Title</label>
                <input type="text" name="title" id="title" class="block py-5 border-black px-36 mx-48">
            </div>
            <div>
                <label for="body" class="block  italic text-xl"> Post Content</label>
                <textarea name="body" id="body" cols="10" rows="10" class="border border-black py-2 px-36 "
                    placeholder="Enter the title"></textarea>
            </div>
            <div>
                <label for="summary" class="block italic text-xl"> Summary </label>
                <input type="summary" name="summary" id="summary" class="block py-8 px-40 border-black border mx-48">
            </div>
            <div class="">
                <label for="title" class="block italic text-xl"> Category</label>
                <select name="category" id="category" class="border-black px-32 py-5">
                    <option value="Pol">Politics</option>
                    <option value="Ent">Entertainment</option>
                    <option value="Gos">Gossip</option>
                </select>
            </div>
            <div>
                <label for="pic" class="block italic text-xl"> Post Image</label>
                <input type="file" name="pics" id="pics" class="py-2 px-36" accept="image/*">
            </div>
            <button class="bg-cyan-500/50 roma rounded text-stone-600 border-spacing-2 px-4 py-2 m-10" type="submit">add
                post</button>
        </form>
    </section>
@endsection
