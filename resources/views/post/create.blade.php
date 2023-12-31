@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"
                       aria-describedby="Title">

                @error('title')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea type="text" class="form-control" name="content" id="content"
                          aria-describedby="Content">{{ old('content') }}</textarea>
                @error('content')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" name="image" id="image" aria-describedby="Image"
                       value="{{ old('image') }}">
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <label for="category">Category</label>
            <select class="form-select" aria-label="Default select example" id="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{old('category_id') == $category->id ? 'selected' : ''}}

                        value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
            <label for="tags">Tags</label>
            <select class="form-select" multiple aria-label="Tags" id="tags" name="tags_id[]">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
            <div><p></p></div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
