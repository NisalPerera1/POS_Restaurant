<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'invoice_number',
    ];

    // Use boot method to register the creating event
    protected static function boot()
    {
        parent::boot();

        // Creating event to generate and set invoice number
        static::creating(function ($customer) {
            $customer->invoice_number = Str::uuid();
        });
    }
}
