@extends('Layout')
@section('content')
<div id="all-output" class="col-md-10 upload">
        	<div id="upload">
                <div class="row">
                    <x-validation-errors></x-validation-errors>
                    <!-- upload -->
                    <div class="col-md-8">
						<h1 class="page-title"><span>آپلود</span> فیلم</h1>
						<form action="/videos" method="post">
                            @csrf
                        	<div class="row">
                            	<div class="col-md-6">
                                	<label>@lang('video.name')</label>
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="@lang('video.name')">
                                </div>
                            	<div class="col-md-6">
                                	<label>@lang('video.video-time')</label>
                                    <input type="text" name="length" class="form-control" value="{{old('length')}}" placeholder="@lang('video.video-time')">
                                </div>
                            	<div class="col-md-6">
                                	<label>@lang('video.unique-name')</label>
                                    <input type="text" name="slug" class="form-control" value="{{old('slug')}}" placeholder="@lang('video.unique-name')">
                                </div>
                            	<div class="col-md-6">
                                	<label>@lang('video.filme-upload')</label>
                                    <input id="upload_file" name="url" type="text" value="{{old('url')}}" class="form-control" placeholder="@lang('video.filme-upload')">
                                </div>
                                <div class="col-md-6">
                                	<label>@lang('video.thumbnail')</label>
                                    <input id="featured_image" name="thumbnail" type="text" class="form-control" value="{{old('thumnail')}}" placeholder="@lang('video.thumbnail')">
                                </div>
                                <div class="col-md-6">
                                	<label>@lang('video.category')</label>
                                    <select name="category_id" id="category" class="form-control">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            	<div class="col-md-12">
                                	<label>@lang('video.description')</label>
                                    <textarea class="form-control" name="description" rows="4" value="{{old('description')}}"  placeholder="@lang('video.description')"></textarea>
                                </div>
                            	
                            	<div class="col-md-6">
                                    <button type="submit" name="send" id="contact_submit" class="btn btn-dm">@lang('video.save')</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- // col-md-8 -->

                    <div class="col-md-4">
                    	<a href="#"><img src="{{ asset('img/logo.png') }}" alt="d"></a>
                    </div><!-- // col-md-8 -->
                    <!-- // upload -->
                </div><!-- // row -->
            </div><!-- // upload -->
		</div>
@endsection