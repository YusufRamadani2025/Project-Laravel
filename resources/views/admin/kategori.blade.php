@extends("layout.appadmin")

@section("content")
    <div class="heading">INPUT PENULIS</div>
    <div class="typing">
      <a href="https://git.io/typing-svg"><img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&weight=600&size=25&duration=4000&pause=1000&color=000000&width=435&lines=JANGAN+LUPA+DI+ISI+YA+GUYS%3AD" alt="Typing SVG" /></a>
    </div>
        <form method="post" class="form" action="{{route('admin.storekategori')}}">
            @csrf
            <div class="input-field">
            <input
                required=""
                type="text"
                name="nama"
            />
            <label for="namaBuku">Kategori</label>
            </div>
            <div class="input-field">
            <input
                required=""
                type="textarea"
                name="deskripsi"
            />
            <label for="namaBuku">Deskripsi</label>
            </div>

            <div class="btn-container">
            <button class="btn">Inputkan</button>
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


                    <table class="table">
                      <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Menu</th>
                      </tr>
                    
                    @forelse ( $kat as $k )

                      <tr>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->deskripsi }}</td>
                        <td>
                          <button class="vista-button"><div>Delete</div></button>
                          <button class="vista-button"><div>Edit</div></button>
                        </td>
                      </tr>

                    @empty
                      Data Tidak Ada
                    @endforelse

                    </table>

                  
@endsection