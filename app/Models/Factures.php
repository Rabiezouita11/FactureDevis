<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factures extends Model
{
    use HasFactory;
    protected $fillable = [
        'NomSoicety', 'adresse', 'email', 'Btscasbella', 'RipAmanBank', 'RipBts', 'Mf', 'telephone', 'user_id', 'prix_hors_taxe', 'prix_avec_taxe'
    ];

   
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasManyThrough(Product::class, UserProduct::class);
    }
}
