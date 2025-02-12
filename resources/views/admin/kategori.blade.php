@extends("layout.appadmin")

@section("content")
        <div class="row">
            <div class="col-6">
            <h2 class="text-judul">Input Kategori </h2>
                <form method="post" action="{{route('admin.storekategori')}}">
                  @csrf
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label"> Nama Kategori </label>
                        <input type="text" class="form-control" name="nama" >
                    </div>

                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Dekripsi Kategori</label>
                        <input type="text" class="form-control" name="deskripsi" >
                    </div>

                    <div class="button-input">
                    <div class="mb-3">
                        <input type="submit" value="Input Data" class="btn btn-primary" name="btnInputBukuGambar">
                      </div>
                    </div>
                      <div class="text-success">
                          @if (session('error'))
                              {{session('error')}}
                          @endif

                          @if (session('success'))
                              {{session('success')}}
                          @endif
                        </div>
                    </form>
            </div>
        </div>


                    <table class="table">
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Menu</th>
                      </tr>
                    
                    @forelse ( $kat as $k )

                      <tr>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->deskripsi }}</td>
                        <td>
                          <button type="button" class="btn btn-danger">Delete</button>
                          <button type="button" class="btn btn-primary">Edit</button>
                        </td>
                      </tr>

                    @empty
                      Data Tidak Ada
                    @endforelse

                    </table>

                  
@endsection