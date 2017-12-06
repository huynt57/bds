<option value="">Vui lòng chọn</option>

@foreach($items as $item)

    <option value="{{ $item->$type }}">{{ $item->name }}</option>

@endforeach