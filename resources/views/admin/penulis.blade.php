@extends("layout.appadmin")


@section("content")
        <div class="row">
            <div class="col-6">
            <h2>Input Penulis </h2>
                <form method="post" action="{{route('admin.storepenulis')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label"> Nama Penulis </label>
                        <input type="text" class="form-control" name="nama" >
                    </div>
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Dekripsi Penulis</label>
                        <input type="text" class="form-control" name="deskripsi" >
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Input Data Buku" class="btn btn-primary" name="btnInputBukuGambar">
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
                    
                    @forelse ( $pen as $p )

                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->deskripsi }}</td>
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