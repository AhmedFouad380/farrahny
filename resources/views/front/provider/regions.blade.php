

<option value="">{{trans('lang.choose_region')}}</option>
@forelse($data as $row)
    <option value="{{$row->id}}"> {{$row->title}} </option>
@empty
    <option disabled selected="">{{trans('lang.no_regions')}} </option>
@endforelse
