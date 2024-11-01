@extends('customers.layouts.layout')

@section('content')
    <div class="row py-4">
        <div class="col-6 mx-auto">
            <h1 class="text-center mb-5">Create Customer</h1>
            <form action="{{ route('customers.store') }}" method="post">
                @csrf
                <label class="form-label" for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name">
                <br>
                <label class="form-label" for="phone">Phone Number</label>
                <input class="form-control" name="phone" id="phone">
                <div class="d-flex justify-content-between">
                    <a class="btn btn-secondary px-4 mt-4" href="{{ route('customers.index') }}">Back</a>
                    <button class="btn btn-primary px-4 mt-4" type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('title')
Create Customer
@endsection

