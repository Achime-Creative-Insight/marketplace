@extends('admin.layouts.app')

@section('content')
    <div class="jumbotron d-flex align-items-center bg-secondary text-white" id="page-header">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1>
                        All Users
                    </h1>
                    <p>
                        View all our users here.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row">
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>
                                    {{$user->name}}
                                </td>
                                <td>
                                    {{$user->email}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 paginator-center">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection