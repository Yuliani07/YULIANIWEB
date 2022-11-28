<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    public function buat()
    {
        return view("pemesanan.form-input");
    }

    public function simpan(Request $request)
    {
        $pemesanan = new Pemesanan ();
        $pemesanan->nama = $request->get("nama");
        $pemesanan->keterangan = $request->get("keterangan");
        $pemesanan->save();

        return redirect(route("tampil_pemesanan", ['id' => $pemesanan->id]));
    }

    public function tampil($id)
    {
        $kategori = Pemesanan::find($id);

        return view("pemesanan.tampil")->with("kategori", $pemesanan);
    }

    public function semua()
    {
        $data = Pemesanan::all();
        return view("pemesanan.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("pemesanan.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan->nama = $request->get("nama");
        $pemesanan->keterangan = $request->get("keterangan");
        $pemesanan->save();

        return redirect(route("tampil_pemesanan", ['id' => $pemesanan->id]));
    }

    public function hapus($id)
    {
        Pemesanan::destroy($id);
        return redirect(route('semua_pemesanan'));
    }
}