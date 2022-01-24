<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cli_rif',
        'cli_nombre',
        'cli_dir',
        'cli_telf1',
        'cli_telf2',
        'cli_correo1',
        'cli_correo2',
        'cli_tipo',
        'cli_foto',
        'cli_activo',
    ];
}
