@extends('Layout')
@section('content')
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> آخرین ویدیو‌ها</h1>
            <div class="row">
                <!-- video-item -->
                <x-videoBox  ></x-videoBox>
                
                <!-- // video-item -->
            </div>
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> پربازدیدترین ویدیوها</h1>
            <div class="row">
                @foreach($bestView as $bestData)
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time">{{ $bestData->length}}</small>
                            <a href="#"><img src="{{$bestData->thumbnail}}" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">{{$bestData->name}}</a>
                            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                            <span class="date"><i class="fa fa-clock-o"></i>{{$bestData->created_at}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب‌ترین‌ها</h1>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time">10:53</small>
                            <a href="#"><img src="https://picsum.photos/446/240?random=5" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </a>
                            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 ماه پیش </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time">10:53</small>
                            <a href="#"><img src="https://picsum.photos/446/240?random=7" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </a>
                            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 ماه پیش </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time">10:53</small>
                            <a href="#"><img src="https://picsum.photos/446/240?random=8" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </a>
                            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 ماه پیش </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time">10:53</small>
                            <a href="#"><img src="https://picsum.photos/446/240?random=6" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </a>
                            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 ماه پیش </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time">10:53</small>
                            <a href="#"><img src="https://picsum.photos/446/240?random=6" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </a>
                            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 ماه پیش </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time">10:53</small>
                            <a href="#"><img src="https://picsum.photos/446/240?random=6" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </a>
                            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 ماه پیش </span>
                        </div>
                    </div>
                </div>
@endsection




    
    