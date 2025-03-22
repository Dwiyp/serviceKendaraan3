<form action="{{route('jnsService.store')}}" method="post" name="tambah">
    @csrf
    <label for="">Jenis Service : </label>
    <input type="text" name="jns_service" id="">
    <label for="">Keterangan : </label>
    <input type="text" name="keterangan" id="">
    <input type="submit" value="simpan" name="simpan">
</form>