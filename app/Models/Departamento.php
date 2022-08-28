<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    public function visitas(){     
        return $this->hasMany(Visita::class, 'id');
    }

    public function encomiendas(){     
        return $this->hasMany(Encomienda::class, 'id');
    }

    public function trabajadorMantenimiento(){
        return $this->hasMany(TrabajadorMantenimiento::class, 'id');
    }

    public function eventos(){     
        return $this->hasMany(SalaEvento::class, 'id');
    }
}
