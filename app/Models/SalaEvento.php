<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaEvento extends Model
{
    use HasFactory;

    public function departamentos(){
        return $this->belongsTo(Departamento::class, 'id_dpto');
    }

    static $rules=[
        'id_dpto' => 'required',
        'title' => 'required',
        'asistentes' => 'required',
        'start' => 'required',
        'end' => 'required'
        
    ];

    protected $fillable=['id_dpto', 'title', 'asistentes', 'start', 'end'];
}
