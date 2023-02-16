@extends('layout')

@section('content')

   
    <form method="POST" action="../{{ $Fwall->id }}">
        @csrf
        @method('PUT')
        <div class="card gedf-card col-md-6 mx-auto mt-3">
            <div class="card-header">
                <div class="pull-right" style="margin-bottom: -9px;">
                        <a class="btn btn-dark" href="../"> Back</a>
                </div>
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active">
                            Edit Content
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" role="tabpanel">
                        <div class="form-group">
                            <input 
                                class="form-control col-md-6 mb-2" 
                                type="name" 
                                name="username"
                                value="{{ $Fwall->username }}" 
                                placeholder="Username">
                            @error('username')
                                <p class="help bg-danger">{{ $errors->first('username')}}</p>
                                <span class="line"></span>  
                            @enderror

                            <textarea 
                                class="form-control" 
                                id="body"
                                name="body"
                                rows="3" 
                                placeholder="What are you thinking?">{{ $Fwall->body }}</textarea>
                            @error('body')
                                <p class="help bg-danger">{{ $errors->first('body')}}</p>
                                <span class="line"></span>  
                            @enderror
                        </div>

                    </div>
                    
                </div>
                <div class="btn-toolbar justify-content-between">
                    <div class="btn-group mt-3 col-lg-12">
                        <button type="submit" class="btn btn-dark ">Update</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>


@endsection