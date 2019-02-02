@foreach($currencies as $currency)
    <option value="{{$currency->currency_id}}">{{$currency->currency_name}}</option>
@endforeach