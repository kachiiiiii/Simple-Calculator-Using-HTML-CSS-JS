@extends('layouts.app')
@section('content')
    <section class="w-5/6 mx-auto">
        <a href="{{ url()->previous() }}"><i class="fa-solid fa-backward"></i></a>
        <div><img src="{{ asset('crud_image/' . $crud->pics) }}" alt=""></div>
        <div class="flex justify-between mx-10">
            <div><i class="fa-solid fa-user"></i>written; Kachi</div>
            ;<div> <i class="fa-solid fa-clock"></i>Published: {{ $crud->updated_at }}</div>
        </div>
        <div>
            {{ $crud->body }}
        </div>
        <div class="flex justify-between mx-14">
<div class="bg-yellow-500 text-white rounded"><a href="{{ route('crud.edit',$crud->id) }}">Edit</a></div>
<form action="{{ route('crud.destroy',$crud->id) }}" method="POST">
@csrf
@method('delete')
<div class="bg-red-700 text-white rounded"><button>delete</button></div>
</form>
        </div>
    </section>
@endsection
 cum!9