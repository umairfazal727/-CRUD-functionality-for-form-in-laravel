@extends('layouts.app')
@section('content')
<div class="container" id="app">
    <subscription-component>
        :data-array="$options"
        :user-id="Auth::user()->id"
    </subscription-component>
</div>
@endsection
