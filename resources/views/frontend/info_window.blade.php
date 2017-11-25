<div style="height: auto; width: 200px">
    <div style="height: 150px; width: 200px; background-size: cover; background-image: url('{{ $house->main_images }}')"
         alt="Image"></div>
    <h3></h3>
    <span></span>


    @if($house->agent)
        <a href="tel://" class="btn_infobox_phone">{{ $house->agent->phone }}</a>
    @else
        <a href="tel://" class="btn_infobox_phone">0123456789</a>
    @endif
    <br>

    <a href="#">Giá: {{ $house->price_text }} VNĐ</a>
    <br>
    @if($house->agent)
    <a href="#">Môi giới viên: {{ $house->agent->name }}</a>
    @else
        <a href="#">Môi giới viên: Chưa xác định</a>
        @endif
    <br>
    <a href="#"> {{ $house->beds }} phòng ngủ, {{ $house->bath }} phòng tắm</a>
    <br>
    <a href="#">Diện tích: {{ $house->size }} m2</a>
    <br>

    <a href="{{ url('house/'.str_slug($house->name).'-'.$house->id) }}" class="btn_infobox" style="margin-top: 10px">Chi tiết</a>
</div>