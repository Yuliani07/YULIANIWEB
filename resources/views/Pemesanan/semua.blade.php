@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $Pemesanan)
        Nama : {{ $Pemesanan->nama }} <br>
        Keterangan: {{ $Pemesanan->keterangan }} <br>
        <a href="{{ route('ubah_Pemesanan', ['id' => $Pemesanan->id]) }}">Ubah</a>
        <a href="{{ route('tampil_Pemesanan', ['id' => $Pemesanan->id]) }}">Tampil</a>

        <form action="{{ route('hapus_Pemesanan', ['id' => $Pemesanan->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection