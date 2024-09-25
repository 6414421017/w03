@extends('layout')
@section('title')
    Faculty | Create
@endsection
@section('content')

<div class="card mt-5">
    <h2 class="card-header text-center font-semibold">Faculty Create</h2>
    <div class="card-body">

        <button class="border rounded-lg px-2">
            <a href="{{ route('faculty.index') }}"><i class="fa fa-plus"></i> back</a>
        </button>

        <form action="{{ route('faculty.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="inputName" class="form-label"><strong>Faculty TH:</strong></label>
                <input 
                    type="text" 
                    name="faculty_th" 
                    class="form-control @error('faculty_th') is-invalid @enderror" 
                    id="inputName" 
                    placeholder="Name">
                @error('faculty_th')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputcontent" class="form-label"><strong>Faculty EN:</strong></label>
                <input 
                    type="text" 
                    name="faculty_en" 
                    class="form-control @error('faculty_en') is-invalid @enderror" 
                    id="inputName" 
                    placeholder="Name">
                @error('faculty_en')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="border rounded-lg px-2"><i class="fa-solid fa-floppy-disk"></i> Submit</button>

        </form>

    </div>
</div>
@endsection
