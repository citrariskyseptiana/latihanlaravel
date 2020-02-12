<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiodataMahasiswa extends Model
{
    //define nama tabel
    protected $table = "biodata_mahasiswa";

    //define fillable columns
    protected $fillable = [
    	"name",
    	"nim",
    	"address"
    ];
}
