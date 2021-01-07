<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{

    protected $guarded =['id'];

    public function pesanan_detail()
	{



         return $this->hasMany('App\PesananDetail','barang_id', 'id');

    }

}
