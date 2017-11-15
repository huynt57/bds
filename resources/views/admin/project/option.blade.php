<option value="">Vui lòng chọn</option>
@foreach($items as $item)
    <option value="{{ $item->$tid }}">{{ $item->name }}</option>
    @endforeach