@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $bayar)
        Nama : {{ $bayar->nama }} <br>
        Keterangan: {{ $bayar->keterangan }} <br>
        <a href="{{ route('ubah_bayar', ['id' => $bayar->id]) }}">Ubah</a>
        <a href="{{ route('tampil_bayar', ['id' => bayar->id]) }}">Tampil</a>

        <form action="{{ route('hapus_bayar', ['id' => $bayar->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection