
@extends('layouts.profile')

@section ('title','Myプロフィール')

@section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール</h2>
                <form action="{{ action('Admin\ProfileController@create')}}" method="post" enctype="multipart/form-data">
                  
                 @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                 @endif 
                  <div class="form-group row">
                      <label class="col-md-2">name</label>
                      <div class="col-md-4">
                          <textarea class="form-control" name="body" rows="1" >{{ old('body') }}</textarea>
                      </div>
                  </div> 
                  
                  <div class="form-group row">
                      <label class="col-md-2">gender</label>
                      <div class="col-md-4">
                          <textarea class="form-control" name="body" rows="1">{{ old('body') }}</textarea>
                      </div>
                  </div>

                  <div class="form-group row">
                　　　<label class="col-md-2">hobby</label>
                　　　<div class="col-md-10">
                　　　 <textarea class="form-control" name="body" rows="3">{{ old('body') }}</textarea>
                　　　</div>
                  </div>
                  
                  <div class="form-group row">
                      <label class="col-md-2">intoroduction</label>
                      <div class="col-md-10">
                          <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
                      </div>
                  </div>
                <input type="submit" class="btn btn-primary" value="更新">
            </div>
        </div>
    </div>
@endsection

