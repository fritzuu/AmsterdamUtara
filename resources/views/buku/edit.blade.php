<div class="container mx-5">
    <h4>Edit Buku</h4>
    <form action="{{route ('buku.update', $buku->id)}}" method="post" class="form form-control">
    @csrf
    <label for="" class="form-label">Judul</label>
    <br>
    <input type="text" name="judul">
    <br>
    <label for="" class="form-label">Penulis</label>
    <br>
    <input type="text" name="penulis">
    <br>
    <label for="" class="form-label">Harga</label>
    <br>
    <input type="text" name="harga">
    <br>
    <label for="" class="form-label">Tanggal Terbit</label>
    <br>
    <input type="date" name="tgl_terbit">
    <br>
    <button class="btn btn-success mt-4" type="submit">Send Data</button>
    <a href="/" class="btn btn-danger mt-4">Batal</a>
    </form>
</div>