@foreach($data as $row)
    <form action="{{route('jnsKendaraan.update', $id)}}" method="post" name="edit">
        @csrf
        <label for="">Nama Jenis Kendaraan : </label>
        <input type="text" name="jenis_kendaraan" value="{{$row->nm_jns_kendaraan}}">
        <input type="submit" value="simpan" name="simpan">
    </form>
@endforeach