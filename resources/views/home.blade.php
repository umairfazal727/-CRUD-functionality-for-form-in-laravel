@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Message</div>
                    <div class="card-body">
                        {{-- @if (session('status')) --}}
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        {{-- @endif --}}
                    </div>
                </div>
            </div>
        </div>
    @endif
    <button type="button" class="btn btn-primary float-right mb-3" data-toggle="modal" data-target="#createModal">Create</button>
    <div class="table-responsive">
        <table class="table table-striped   ">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($formDataList))
                    @foreach ($formDataList as $formData)
                        <tr>
                            <td>{{ $formData->name }}</td>
                            <td>{{ $formData->email }}</td>
                            <td>
                                <img src="{{ asset('images/'.$formData->image) }}" alt="Image" width="100">
                            </td>
                            <td>                                                        
                                <!-- Edit Button trigger modal -->
                                <button type="button" class="btn btn-primary mr-1" data-toggle="modal" data-target="#exampleModal-{{$formData->id}}">
                                    Edit
                                </button>
                                <a class="btn btn-danger" href="{{ route('delete-form', $formData->id)}}" onclick="return confirm('Are you sure you want to delete this form entry?')">Delete</a>
                            {{-- edit modal  --}}
                                <div class="modal fade" id="exampleModal-{{$formData->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Form</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <form method="POST" action="{{ route('update-form', $formData->id) }}" enctype="multipart/form-data">
                                                <div class="card-body">
                                                    @csrf
                                                    <input id="id" type="hidden" name="id" value="{{$formData->id }}" >
                                                    <div class="row mb-3">
                                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$formData->name }}" required autocomplete="name" autofocus>
                            
                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                            
                                                    <div class="row mb-3">
                                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $formData->email }}" required autocomplete="email">
                            
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                            
                                                    <div class="row mb-3">
                                                        <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <img src="{{ asset('images/'.$formData->image) }}" alt="Image" width="100">
                                                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required autocomplete="image">
                                                            @error('image')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Submit') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Submit') }}
                                                    </button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <h3 class="text-center">No Data Found</h3>
                @endif
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
            @csrf
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                        <div class="col-md-6">
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required autocomplete="image">

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
