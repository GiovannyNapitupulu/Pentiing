<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jawaban extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function consultation()
    {
        return $this->belongsTo(consultation::class, 'consultation_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
