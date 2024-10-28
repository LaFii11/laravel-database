@extends('brands.layouts.layout')

@section('content')
    <h1 class="text-center fw-bold">Brand</h1>
    <a href="{{ route('brands.create') }}" class="btn btn-dark">Create Brand</a>
    <table class="table table-striped mt-4">
        <thead class="thead-dark">
            <tr>
                <th class="py-3" scope="col">ID</th>
                <th class="py-3" scope="col">Brand Name</th>
                <th class="py-3" scope="col">Establisbed Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $brand)
                <tr>
                    <th scope="row">{{ $brand->id }}</th>
                    <td>{{ $brand->brand_name }}</td>
                    <td>{{ $brand->established_date }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('brands.show', ['brand' => $brand->id]) }}"
                            class="btn btn-primary btn-sm">Show</a>
                        <a href="{{ route('brands.edit', ['brand' => $brand->id]) }}"
                            class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('brands.destroy', ['brand' => $brand->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
