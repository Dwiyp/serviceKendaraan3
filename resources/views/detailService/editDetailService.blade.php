@foreach($data as $row)
    <form action="{{route('detailService.update', $id)}}" method="post" name="edit">
        @csrf
        <label for="">Sparepart : </label>
        <input type="text" name="sparepart" value="{{$row->sparepart}}">
        <label for="">Harga : </label>
        <input type="text" name="harga" value="{{$row->harga}}">
        <input type="submit" value="simpan" name="simpan">
    </form>
@endforeach