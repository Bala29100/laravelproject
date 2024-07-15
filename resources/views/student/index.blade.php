@extends('layouts.layout')
@section('main')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Laravel-11 Crud</h1>
                        <a href={{ url('/students/create') }} class="btn btn-primary float-end align-center">Add Student</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered  table-striped table-responsive table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address1</th>
                                    <th>Address2</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-secondary">
                                @foreach ($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->address1 }}</td>
                                        <td>{{ $item->address2 }}</td>

                                        <td>
                                            <a href={{ url('/students/' . $item->id) }} class ='btn btn-info btn-sm'
                                                title='View Student'>View</a>
                                            <a href={{ url('/students/' . $item->id . '/edit') }}
                                                class = 'btn btn-warning btn-sm'>Edit</a>

                                            <form method = 'POST' action={{ url('/students/' . $item->id) }}
                                                style='display:inline'>
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}

                                                <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
