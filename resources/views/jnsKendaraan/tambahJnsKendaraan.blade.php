<form action="{{route('jnsKendaraan.store')}}" method="post" name="tambah">
    @csrf
    <label for="">Nama Jenis Kendaraan : </label>
    <input type="text" name="jenis_kendaraan" id="">
    <input type="submit" value="simpan" name="simpan">
</form>