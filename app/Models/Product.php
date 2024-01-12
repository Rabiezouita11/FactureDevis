<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nom',
        'Description',
        'quantite',
        'Prix',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_products')->withPivot('facture_id');
    }
}
