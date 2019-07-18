@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{ route('influencers.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header">Add a Influencer</div>
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
                                {{ Form::label('photo', 'Photo') }}:
                                {{ Form::file('photo', array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">    
                                {{ Form::label('name', 'Name') }}:
                                {{ Form::text('name', "", array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">    
                                {{ Form::label('title', 'Title') }}:
                                {{ Form::text('title', "", array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('type', 'Type') }}:
                                {{ Form::select('type', array('brand' => 'Brand', 'influencer' => 'Influencer'), NULL, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('category', 'Categories') }}:
                                {{Form::select('category_id', $categories, null, array('multiple'=>'multiple','name'=>'category[]', 'class' => 'form-control'))}}
                            </div>

                            <div class="form-group">    
                                {{ Form::label('birth', 'Birth') }}:
                                {{ Form::date('birth', "", array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('sexe', 'Sexe') }}:
                                {{ Form::select('sexe', array('man' => 'Man', 'woman' => 'Woman'), NULL, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('localization', 'Localization') }}:
                                {{ Form::text('localization', "", array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('languages', 'Languages') }}:
                                {{ Form::text('languages', "", array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('email', 'E-mail') }}:
                                {{ Form::email('email', "", array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('phone', 'Phone') }}:
                                {{ Form::number('phone', "", array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('description', 'Description') }}:
                                {{ Form::textarea('description', "", array('class' => 'form-control')) }}
                            </div>

                            {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-header">Social network</div>
                    <div class="card-body">
                        <div class="form-group">
                            {{ Form::label('facebook', 'Facebook') }}:
                            {{ Form::text('facebook', "", array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('twitter', 'Twitter') }}:
                            {{ Form::text('twitter', "", array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('instagram', 'Instagram') }}:
                            {{ Form::text('instagram', "", array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('youtube', 'Youtube') }}:
                            {{ Form::text('youtube', "", array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('website', 'Website') }}:
                            {{ Form::text('website', "", array('class' => 'form-control')) }}
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
