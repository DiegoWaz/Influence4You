@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update a category</div>
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
                    <form method="post" action="{{ route('category.update', $category->id) }}">
                        @method('PATCH') 
                        @csrf
                        <div class="form-group">    
                            {{ Form::label('name', 'Name') }}:
                            {{ Form::text('name', $influencer->name, array('class' => 'form-control')) }}
                        </div>
                            {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
