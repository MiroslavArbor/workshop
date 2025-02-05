<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phoneNumber',
        'country_id',
    ];

    public function country(): void
    {
        $this->belongsTo(Country::class);
    }
}
