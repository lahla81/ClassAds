@extends('layouts.app')

@section('content')
<div class="col-lg-8">
    <p><h2>تعديل الإعلان</h2></p>

    @include('alerts.success')
    
    <form method="POST" action="" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="country_id">حدد البلد</label>
            <select class="form-control" name="country_id">
               @foreach($countries as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="title">عنوان الإعلان</label>
            <input type="text" class="form-control" name="title" value="{{$ad->title}}">
        </div>

        <div class="form-group">
            <label for="category_id">إختر التصنيف</label>
            <select class="form-control" name="category_id">
                @foreach($categories as $item)
                    <option value="{{$item->id}}">{{$item->category_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="details">تفاصيل الإعلان</label>
            <textarea class="form-control" name="text" rows="3" title="السعر">{{old('text')}}</textarea>
        </div>

        <div class="form-group">
            <label class="col-lg-3 control-label" for="price" value="{{old('price')}}">السعر</label>
            <div class="row">
                <div class="col-lg-7">
                    <input type="number" class="form-control" name="price" value="{{old('price')}}" step="any">
                </div>
                <div class="col-lg-5">
                <select class="form-control" name="currency_id">
                    @include('lists.currencies')
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="images">أضف الصور</label>
            <input type="file" class="form-control" name="images[]" multiple>
        </div>
        <button type="submit" class="btn btn-primary">تعديل إعلان</button>

    </form>
</div>
@endsection