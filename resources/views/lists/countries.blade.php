@foreach($countries as $item)
    <option value="{{$item->id}}">{{$item->country_name}}</option>
@endforeach