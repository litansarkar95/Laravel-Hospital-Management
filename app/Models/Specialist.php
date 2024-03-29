<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Specialist(){
        return $this->hasMany(Loan::class);
    }
}
