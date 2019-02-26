@extends('layouts.app')

@section('content')
<h5 class="card-text">{{$ad->title}}</h5>
@include('partials.shareBtns')
<div class="row">
    <div class="col-lg-4 col-md-6 col-xs-11">
        <div id="carouselIndicators" class="carousel slid">
            <div class="carousel-inner">
                <?php $i=0 ?>
                @foreach($ad->images as $img)
                <?php $i++ ?>
                    <div class="carousel-item {{$i==1 ? 'active' : ''}} ">
                        <img height="500" src="{{asset('/storage/images/'.$img->image)}}" alt="">
                    </div>
                @endforeach
            </div>

            <div class="carousel-indicators">
            <?php $i=0 ?>
            @foreach($ad->images as $img)
                <img class="img-thumbnail" width="100" src="{{asset('/storage/images/thumbs/'.$img->image)}}" alt="" data-target="#carouselIndicators" data-slide-to="{{$i++}}">
            @endforeach
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-md-6 col-xs-11">
        <div class="card">
            <div class="card-body">
                <h4>تفاصيل الإعلان</h4>
                <p class="card-text">إسم المعلن : {{$ad->user->name}}</p>
                <p class="card-text">الدولة : {{$ad->country->country_name}}</p>
                <p class="card-text">العملة : {{$ad->currency->currency_name}}</p>
                <p class="card-text">السعر : {{$ad->price}}</p>
                <h4>وصف الإعلان : </h4>
                <p class="card-text">{{$ad->text}}</p>
            </div>
        </div>
    </div>
</div>
@endsection