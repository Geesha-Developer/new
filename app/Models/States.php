<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;
    protected $table = 'states';

    protected $fillable = ['name','country_id'];


    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
