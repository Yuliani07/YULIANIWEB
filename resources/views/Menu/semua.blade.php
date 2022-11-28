@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $Menu)
        Nama : {{ $Menu->nama }} <br>
        Keterangan: {{ $Menu->keterangan }} <br>
        <a href="{{ route('ubah_Menu', ['id' => $Menu->id]) }}">Ubah</a>
        <a href="{{ route('tampil_Menu', ['id' => $Menu->id]) }}">Tampil</a>

        <form action="{{ route('hapus_Menu', ['id' => $Menu->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection