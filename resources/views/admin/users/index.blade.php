@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>Create at</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{$user->created_at}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$users->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection