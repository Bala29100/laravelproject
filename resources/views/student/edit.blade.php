@extends('layouts.layout')
@section('main')
    <div class="container py-5 ">
        <div class="card shadow-lg">
            <div class="card-header bg-info">
                Edit Student Details
                <a href={{ url('/students') }} class="btn btn-dark float-end">Back</a>
            </div>
            <div class="card-body bg-light">
                <form action={{ url('/students/' . $student->id) }} method="POST">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="id" class="form-label">Id</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $student->id }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $student->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="{{ $student->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            value="{{ $student->phone }}">
                    </div>
                    <div class="mb-3">
                        <label for="Address1" class="form-label">Address1</label>
                        <input type="text" class="form-control" id="Address1" name="Address1"
                            value="{{ $student->address1 }}">
                    </div>
                    <div class="mb-3">
                        <label for="Address2" class="form-label">Address2</label>
                        <input type="text" class="form-control" id="Address2" name="Address2"
                            value="{{ $student->address2 }}">
                    </div>
                    <div class="mb-3"><input class="btn btn-primary btn-lg" type="submit" value="update"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
