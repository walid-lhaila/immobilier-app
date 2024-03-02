<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonces extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_annonce',
        'type_bien',
        'description',
        'user_id',
    ];


    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}
}
