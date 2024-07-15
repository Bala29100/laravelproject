@extends('layouts.layout')
@section('main')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>view Student</h2>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Name : {{ $student->name }}</h5>
                        <p class="card-title">Address : {{ $student->email }}</p>
                        <p class="card-title">Phone : {{ $student->phone }}</p>
                        <p class="card-title">Address1 : {{ $student->address1 }}</p>
                        <p class="card-title">Address2 : {{ $student->address2 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
