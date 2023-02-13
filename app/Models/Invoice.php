<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    //relationship
    public function user()
    {
        return $this->belongsTo(Customer::class);
    }
}
