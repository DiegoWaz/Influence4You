@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $influencer->name }}</div>
                <div class="card-body">
                        @if ($influencer->photo)
                            <img class="card-img-top" src="/photos/{{ $influencer->photo }}" width="200">
                        @endif

                        <div class="form-group">    
                            <strong>{{ Form::label('title', 'Title') }}:</strong>
                            {{ $influencer->title }}
                        </div>

                        <div class="form-group">
                            <strong>{{ Form::label('type', 'Type') }}:</strong>
                            {{ $influencer->type }}
                        </div>

                        <div class="form-group">
                            <strong>{{ Form::label('category', 'Categories') }}:</strong>
                            @foreach ($influencer->categories as $category)
                                {{ $category->name }}
                            @endforeach
                        </div>

                        <div class="form-group">    
                            <strong>{{ Form::label('birth', 'Birth') }}:</strong>
                            {{ $influencer->birth }} ({{ $influencer->age }} years)
                        </div>

                        <div class="form-group">
                            <strong>{{ Form::label('sexe', 'Sexe') }}:</strong>
                            {{ $influencer->sexe }}
                        </div>

                        <div class="form-group">
                            <strong>{{ Form::label('localization', 'Localization') }}:</strong>
                            {{ $influencer->localization }}
                        </div>

                        <div class="form-group">
                            <strong>{{ Form::label('languages', 'Languages') }}:</strong>
                            {{ $influencer->languages }}
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Social network</div>
                    <div class="card-body">
                        @if($influencer->facebook)
                            <div class="form-group">
                            <strong>{{ Form::label('facebook', 'Facebook') }}:</strong>
                                <a href="{{ $influencer->facebook }}">{{ $influencer->facebook }}</a>
                            </div>
                        @endif

                        @if($influencer->twitter)
                            <div class="form-group">
                                <strong>{{ Form::label('twitter', 'Twitter') }}:</strong>
                                <a href="{{ $influencer->twitter }}">{{ $influencer->twitter }}</a>
                            </div>
                        @endif

                        @if($influencer->instagram)
                            <div class="form-group">
                                <strong>{{ Form::label('instagram', 'Instagram') }}:</strong>
                                <a href="{{ $influencer->instagram }}">{{ $influencer->instagram }}</a>
                            </div>
                        @endif

                        @if($influencer->youtube)
                            <div class="form-group">
                                <strong>{{ Form::label('youtube', 'Youtube') }}:</strong>
                                <a href="{{ $influencer->youtube }}">{{ $influencer->youtube }}</a>
                            </div>
                        @endif

                        @if($influencer->website)
                            <div class="form-group">
                                <strong>{{ Form::label('website', 'Website') }}:</strong>
                                <a href="{{ $influencer->website }}">{{ $influencer->website }}</a>
                            </div>
                        @endif
                    </div>    
                </div>
            </div>
        </div>                
    </div>  
</div>
@endsection
