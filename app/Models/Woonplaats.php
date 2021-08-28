<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Woonplaats extends Model
{
    use HasFactory;
    protected $table = 'woonplaats';

    public function studenten()
    {
        return $this->hasMany(Student::class);
    }
}
