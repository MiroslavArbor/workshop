<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    protected $fillable = [
        'countryName',
        'countryCode',
    ];

    public function students(): void
    {
        $this->hasMany(Student::class);
    }
}
