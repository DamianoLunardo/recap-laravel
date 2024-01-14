@extends('layouts.app')

@section('content')

<section class="py-3">
    <div class="container">
        <h1>New Project</h1>
    </div>
</section>
<section>
 <div class="container">
    <form action="{{ route('admin.project.store') }}" method="POST">

        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" required class="form-control" name="title" id="title" placeholder="Project Title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Project Content</label>
            <textarea class="form-control" name="content" id="content" rows="3">
                {{ old('content') }}
            </textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Create">
        </div>

    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

 </div>
</section>

@endsection