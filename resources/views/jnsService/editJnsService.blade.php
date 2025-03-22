@foreach($data as $row)
    <form action="{{route('jnsService.update', $id)}}" method="post" name="edit">
        @csrf
        <label for="">Jenis Service : </label>
        <input type="text" name="jns_service" value="{{$row->jns_service}}">
        <label for="">Keterangan : </label>
        <input type="text" name="keterangan" value="{{$row->keterangan}}">
        <input type="submit" value="simpan" name="simpan">
    </form>
@endforeach