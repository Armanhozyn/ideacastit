@extends('apps.backapp')
@section('title', 'Contact Info')
@section('pageTitle', 'Contact Info')
@section('main')
    <div class="row">
        <div class="col-xl-12 mx-auto mt-5">
            <div class="card overflow-hidden">
                <div class="bg-primary bg-soft">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p>ICIT Contact Info</p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="assets/images/profile-img.png" alt="ideacast it" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Topic</th>
                                <th>message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $key => $data)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>
                                        @foreach ($mainmenus as $value)
                                            @if ($data->topic == $value->id)
                                                {{ $value->name }}
                                            @else
                                                @continue
                                            @endif
                                        @endforeach

                                    </td>
                                    <td>{!! $data->description !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
