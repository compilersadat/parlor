@extends('lap::layouts.auth')

@section('title', 'Service')
@section('child-content')
    <div class="row mb-3">
        <div class="col-md">
            <h2 class="mb-0">@yield('title')</h2>
        </div>
        <div class="col-md-auto mt-2 mt-md-0">
            @can('Update Users')
                <a href="{{ route('services.update', $service->id) }}" class="btn btn-primary">Update</a>
            @endcan
            @can('Delete Users')
                <form method="POST" action="{{ route('services.delete', $service->id) }}" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary" data-confirm>Delete</button>
                </form>
            @endcan
        </div>
    </div>

    <div class="list-group">
        <div class="list-group-item">
            <div class="row">
                <div class="col-md-2">ID</div>
                <div class="col-md-8">{{ $service->id }}</div>
            </div>
        </div>

        <div class="list-group-item">
            <div class="row">
                <div class="col-md-2">Name</div>
                <div class="col-md-8">{{ $service->name }}</div>
            </div>
        </div>

        <div class="list-group-item">
            <div class="row">
                <div class="col-md-2">Image</div>
                <div class="col-md-8"><a href="{{ asset('../storage/app/service/'.$service->image)}}"><img src="{{ asset('../storage/app/service/'.$service->image)}}" width="80"></a></div>
            </div>
        </div>

        <div class="list-group-item">
            <div class="row">
                <div class="col-md-2">Price</div>
                <div class="col-md-8">{{ $service->price }}</div>
            </div>
        </div>

        <div class="list-group-item">
            <div class="row">
                <div class="col-md-2">Description</div>
                <div class="col-md-8">{{ $service->description }}</div>
            </div>
        </div>

        <div class="list-group-item">
            <div class="row">
                <div class="col-md-2">Created At</div>
                <div class="col-md-8">{{ $service->created_at }}</div>
            </div>
        </div>

        <div class="list-group-item">
            <div class="row">
                <div class="col-md-2">Updated At</div>
                <div class="col-md-8">{{ $service->updated_at }}</div>
            </div>
        </div>
    </div>
@endsection
