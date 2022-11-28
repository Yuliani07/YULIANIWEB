<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";
}
public function Makanan()
{
    return $this->hasMany(related: Makanan::class,foregnKey: "user_id")

}
public function kategori()
{
    return $this->belongsToMany(Kategori::class, "kategori_makanan" ,"kategori_id" , "Makanan_id")
}