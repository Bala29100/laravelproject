@extends('layouts.layout')
@section('main')
    <div class="container py-5 ">
        <div class="card shadow-lg">
            <div class="card-header bg-info">
                Create Students Details
                <a href={{ url('/students') }} class="btn btn-dark float-end">Back</a>
            </div>
            <div class="card-body bg-light">
                <form action={{ url('/students') }} method="POST">
                    {!! csrf_field() !!}
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="address1" class="form-label">Address1</label>
                        <input type="text" class="form-control" id="address1" name="address1">
                    </div>
                    <div class="mb-3">
                        <label for="address2" class="form-label">Address2</label>
                        <input type="text" class="form-control" id="address2" name="address2">
                    </div>
                    <div class="mb-3"><input class="btn btn-primary btn-lg" type="submit" value="save"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
