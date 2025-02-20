@extends('Admin.index')
@section('content')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title-w-btn">
                {{-- <div class="d-flex align-items-center"> --}}
                <h3 class="title">Instagram Images Detail</h3>



                @if (session('success'))
                    <div class="col-lg-6">
                        <div class="bs-component">
                            <div class="alert alert-dismissible alert-success">
                                <button class="close" type="button" data-dismiss="alert">×</button>
                                <h1><strong> {{ session('success') }} </strong></h1>
                            </div>
                        </div>
                    </div>
                @endif

                @if (session('danger'))
                    <div class="col-lg-6">
                        <div class="bs-component">
                            <div class="alert alert-dismissible alert-danger">
                                <button class="close" type="button" data-dismiss="alert">×</button>
                                <h1><strong> {{ session('danger') }} </strong></h1>
                            </div>
                        </div>
                    </div>
                @endif

                <p> <a class="btn btn-primary icon-btn" href="{{ route('InsImages.create') }}">
                        <i class="fa fa-plus"></i>
                        Add InsImages
                    </a>
                </p>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table id="sampleTable" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th> Id</th>
                                    <th>Images</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($inst as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>
                                            <img style="height: 80px"
                                                src="{{ asset('storage/Instagram/' . $item->image) }}">
                                        </td>
                                        <td> <span class="badge btn badge-{{ $item->status == 1 ? 'success' : 'danger' }}">
                                                {{ $item->status == 1 ? 'Active' : 'InActive' }}</span>
                                        </td>

                                        <td>
                                            <form action="{{ route('InsImages.destroy', $item->id) }}" method="POST">
                                                <a class="btn btn-info btn-ms"
                                                    href="{{ route('InsImages.show', $item->id) }}">
                                                    </i> Show</a>
                                                <a class="btn btn-success btn-ms"
                                                    href="{{ route('InsImages.edit', $item->id) }}"> Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-ms"> </i> Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $inst->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
