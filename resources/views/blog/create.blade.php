@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h3>Create Blog</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('blog.store') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Category</label>

                        <select name="category" id="" class="form-control">
                            <option value="" selected>Select</option>
                            @foreach ($categories as $category)
                                <option value="">{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Body</label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="1">Show</option>
                            <option value="0">Hide</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
