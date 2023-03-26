@extends('layouts.layout')

@section('content')
    @if($active) 
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $title }}</h5>
                <p>{{ $description }}</p>
                <p>{{ $likeCount }} likes</p>
            </div>
        </div>
    @else
        <div class="alert alert-warning">
            Blog bulunamadı
        </div>
    @endif
@endsection