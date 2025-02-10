
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <h2>Input Data Buku </h2>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Judul Buku </label>
                        <input type="text" class="form-control" name="judul" >
                    </div>
                    <div class="mb-3">
                        <label for="nmpengarang" class="form-label">Pengarang</label>
                        <select class="form-select" name="pengarang">
                                <option selected>--Pengarang--</option>
                                <option value="1">Andrea Hirata</option>
                                <option value="2">Dewi Lestari</option>
                                <option value="3">Maudy Ayunda</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nmpenerbit" class="form-label">Penerbit</label>
                        <select class="form-select" name="penerbit">
                                <option selected>--Pilih Penerbit--</option>
                                <option value="1">Bentang</option>
                                <option value="2">Gramedia</option>
                                <option value="3">Informatika</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nmpenerbit" class="form-label">Tahun Terbit</label>
                        <select class="form-select" name="tahunTerbit">
                                <option selected>--Pilih Tahun--</option>

                                <option value="">pilihan</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nmpenerbit" class="form-label">Kategori / Genre</label>
                        <select class="form-select" name="genre">
                                <option selected>--Pilih Genre--</option>
                                <option value="1">Romance</option>
                                <option value="2">Thriller</option>
                                <option value="3">Horror</option>
                                <option value="4">BioGraphy</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="sinopsis">Sinopsis</label>
                        <textarea name="sinopsis" class="form-control" placeholder="Leave a comment here" id="" for="sinopsis"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="coverBuku">Cover Buku</label>
                        <input type="file" name="gambar" id="" class="form-control" />
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Input Data Buku" class="btn btn-primary" name="btnInputBukuGambar">
                    </div>


                </form>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
