@extends('lap::layouts.auth')

@section('title', 'Update Service')
@section('child-content')
    <h2>@yield('title')</h2>

    <form method="POST" action="{{ route('services.update', $service->id) }}" novalidate data-ajax-form enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="list-group">
            <div class="list-group-item">
                <div class="form-group row mb-0">
                    <label for="name" class="col-md-2 col-form-label">Name</label>
                    <div class="col-md-8">
                        <input type="text" name="name" id="name" class="form-control" value="{{ $service->name }}">
                    </div>
                </div>
            </div>

            <div class="list-group-item">
                <div class="form-group row mb-0">
                    <label for="image" class="col-md-2 col-form-label">Image</label>
                    <div class="col-md-8">
                        <input type="file" name="image" id="image" class="form-control" value="{{ $service->image }}">
                    </div>
                </div>
            </div>

            <div class="list-group-item">
                <div class="form-group row mb-0">
                    <label for="price" class="col-md-2 col-form-label">Price</label>
                    <div class="col-md-8">
                        <input type="text" name="price" id="price" class="form-control" value="{{ $service->price }}">
                    </div>
                </div>
            </div>

            <div class="list-group-item">
                <div class="form-group row mb-0">
                    <label for="description" class="col-md-2 col-form-label">Description</label>
                    <div class="col-md-8">
                        <input type="text" name="description" id="description" class="form-control" value="{{ $service->description }}">
                    </div>
                </div>
            </div>

            <div class="form-group text-right">
                <button class="btn bg-maroon" type="submit">
                    Edit Service
                </button>
            </div>
        </div>
    </form>
@endsection
