@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                {{ session()->get('success') }}  
                </div>
            @endif
        </div>
        <div class="col-md-8">
            <div class="card">
                <div>
                    <a style="margin: 19px;" href="{{ route('influencer.create')}}" class="btn btn-primary">New Influencer</a>
                </div> 
                <div class="card-header">List an Influencer</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Title</td>
                            <td>Birth</td>
                            <td>Localization</td>
                            <td colspan = 2>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($influencers as $influencer)
                            <tr>
                                <td>{{$influencer->id}}</td>
                                <td>{{$influencer->name}}</td>
                                <td>{{$influencer->title}}</td>
                                <td>{{$influencer->birth}}</td>
                                <td>{{$influencer->localization}}</td>
                                <td>
                                    <a href="{{ route('influencer.edit', $influencer->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('influencer.destroy', $influencer->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
