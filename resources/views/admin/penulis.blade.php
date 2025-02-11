@extends("layout.appadmin")


@section("content")


        <div class="row">
            <div class="col-6">
            <h2>Input Kategori </h2>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label"> Nama Penulis </label>
                        <input type="text" class="form-control" name="judul" >
                    </div>
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Dekripsi Penulis</label>
                        <input type="text" class="form-control" name="judul" >
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Input Data Buku" class="btn btn-primary" name="btnInputBukuGambar">
                    </div>



@endsection    