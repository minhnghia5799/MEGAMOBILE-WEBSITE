<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMucSanPham extends Model
{
    use HasFactory;

    protected $table ="danhmucsanpham";
    protected $primaryKey ='idDanhMuc';
    public function SanPham(){
        return $this->hasMany(SanPham::class,'DanhMuc','idDanhMuc');
    }
}
