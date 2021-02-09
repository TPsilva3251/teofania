<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bibles extends Model
{
    protected $fillable = ['name', 'categories_id', 'descricao', 'traducao', 'idioma', 'tamanho_da_letra', 'capa', 'acabamento',
                            'medida', 'formato', 'paginas', 'indice', 'indicacao', 'isbn', 'codigo', 'peso','img1','img2','img3'];

    public function category()
    {
        return $this->belongsTo(categories::class);
    }

    public function imagesbibles()
    {
        return $this->hasMany(imagesbiblesModel::class, 'bibles_id');
    }
}
