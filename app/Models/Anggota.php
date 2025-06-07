<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = "anggota";
    protected $fillable = ["user_id","alamat","no_hp","foto","tanggal_lahir","potensi_custom"];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
