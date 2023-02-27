

    <option value="">{{trans('lang.choose_category')}}</option>
    @forelse($data as $row)
        <option value="{{$row->id}}"> {{$row->title}} </option>
    @empty
        <option disabled selected="">{{trans('lang.no_categories')}} </option>
    @endforelse
