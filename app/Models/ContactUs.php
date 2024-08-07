<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContactUs extends Model
{
    use HasFactory;

    public function contactUsTopic(): BelongsTo
    {
        return $this->belongsTo(ContactUsTopic::class);
    }
}
