@extends('lap::layouts.auth')

@section('title', 'Services')
@section('child-content')

    <div class="col-xs-12">
        <div class="box">

            <div class="box-header">
                <div class="pull-right">
                    <a href="{{route('services.create')}}" class=" btn bg-maroon "><i class="fa fa-plus"></i> Create New </a><br>

                </div>

                <h3 class="box-title">Attendants</h3>

            </div>
            <div class="box-body ">
                <table class="table table-bordered table-striped" id="att" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SR NO</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>SR NO</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php $i=1;?>
                    @foreach($users as $row)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$row->name}}</td>
                            <td><a href="{{ asset('../storage/app/service/'.$row->image)}}"><img src="{{ asset('../storage/app/service/'.$row->image)}}" width="80"></a></td>
                            <td>{{$row->price}}</td>
                            <td>{{$row->description}}</td>
                            <td><a href="{{route('services.edit',$row->id)}}" class="label bg-blue"><i class="fa fa-edit"></i> Edit</a>
                                <a href="{{route('services.delete',$row->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="label bg-red-active"><i class="fa fa-trash"></i> Delete</a>
                                <a href="{{route('services.show',$row->id)}}"><span class="label bg-info"><i class="fa fa-eye"></i>&ensp;See Details</span></a>
                            </td>
                        </tr>
                        <?php $i++?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

@endpush
