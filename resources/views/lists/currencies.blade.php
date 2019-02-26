@foreach($currencies as $currency)
    <option value="{{$currency->id}}">{{$currency->currency_name}}</option>
@endforeach