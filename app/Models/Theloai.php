<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theloai extends Model
{
    use HasFactory;
    protected $table = 'theloais';
    protected $fillable = ['ten_the_loai'];
    public function sachs()
    {
        return $this->hasMany(Sach::class, 'theloai_id');
    }
}
