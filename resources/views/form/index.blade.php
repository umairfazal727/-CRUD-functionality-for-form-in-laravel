
@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formDataList as $formData)
                <tr>
                    <td>{{ $formData->name }}</td>
                    <td>{{ $formData->email }}</td>
                    <td>
                        <img src="{{ asset('images/'.$formData->image) }}" alt="Image" width="100">
                    </td>
                    <td>
                        <a href="{{ route('form.edit', $formData->id) }}">Edit</a>
                        <form action="{{ route('form.delete', $formData->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this form entry?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
