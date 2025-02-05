<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;

    protected $table = 'tipe';

    protected $fillable = [
        'nama_tipe',
        'kode_tipe',
    ];


}