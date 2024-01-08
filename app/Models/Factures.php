<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factures extends Model
{
    use HasFactory;
    protected $fillable = [
        'NomSoicety', 'adresse', 'email', 'Btscasbella', 'RipAmanBank', 'RipBts', 'Mf', 'telephone', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
