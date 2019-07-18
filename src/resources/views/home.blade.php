@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="row">
                @foreach($influencers as $influencer)
                    <div class="col-md-4">
                        <div class="card">
                            @if($influencer->photo)
                                <img class="card-img-top" src="/photos/{{ $influencer->photo }}" width="100" alt="{{ $influencer->name }}">
                                @else
                                <img class="card-img-top" src="/photos/default.png" width="100" alt="{{ $influencer->name }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">
                                <a href="{{ route('influencers.show', $influencer->id)}}">
                                    {{ $influencer->name }}
                                </a>
                                </h5>
                                <span class="card-title">{{ $influencer->title }}</span>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
