@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{ route('influencers.update', $influencer->id) }}" enctype="multipart/form-data">
        @method('PATCH') 
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update an influencer</div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br />
                        @endif
                            <div class="form-group">
                                @if ($influencer->photo)
                                    <img src="/photos/{{ $influencer->photo }}" width="200">
                                @endif
                                {{ Form::file('photo', array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">    
                                {{ Form::label('name', 'Name') }}:
                                {{ Form::text('name', $influencer->name, array('class' => 'form-control')) }}
                            </div>
                            
                            <div class="form-group">    
                                {{ Form::label('title', 'Title') }}:
                                {{ Form::text('title', $influencer->title, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('type', 'Type') }}:
                                {{ Form::select('type', array('brand' => 'Brand', 'influencer' => 'Influencer'), $influencer->type, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('category', 'Categories') }}:
                                {{ Form::select('category', $categories, $influencer->categories, array('multiple'=>'multiple','name'=>'category[]', 'class' => 'form-control'))}}
                            </div>

                            <div class="form-group">    
                                {{ Form::label('birth', 'Birth') }}:
                                {{ Form::date('birth', $influencer->birth, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('sexe', 'Sexe') }}:
                                {{ Form::select('sexe', array('man' => 'Man', 'woman' => 'Woman'), $influencer->sexe, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('localization', 'Localization') }}:
                                {{ Form::text('localization', $influencer->localization, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('languages', 'Languages') }}:
                                {{ Form::text('languages', $influencer->languages, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('email', 'E-mail') }}:
                                {{ Form::email('email', $influencer->email, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('phone', 'Phone') }}:
                                {{ Form::number('phone', $influencer->phone, array('class' => 'form-control')) }}
                            </div>
                                {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Social network</div>
                        <div class="card-body">
                            <div class="form-group">
                                {{ Form::label('facebook', 'Facebook') }}:
                                {{ Form::text('facebook', $influencer->facebook, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('twitter', 'Twitter') }}:
                                {{ Form::text('twitter', $influencer->twitter, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('instagram', 'Instagram') }}:
                                {{ Form::text('instagram', $influencer->instagram, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('youtube', 'Youtube') }}:
                                {{ Form::text('youtube', $influencer->youtube, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('website', 'Website') }}:
                                {{ Form::text('website', $influencer->website, array('class' => 'form-control')) }}
                            </div>
                        </div>    
                    </div>
                </div>
            </div>                
        </div>
    </form>    
</div>
@endsection
