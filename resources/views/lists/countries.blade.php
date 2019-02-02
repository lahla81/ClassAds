@foreach($countries as $item)
    <option value="{{$item->country_id}}">{{$item->country_name}}</option>
@endforeach