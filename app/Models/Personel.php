<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{
    use HasFactory;

    protected $table = 'personels';

    public function ticket()
    {
        return $this->belongsTo('App\Models\Ticket', 'ticket_id');
    }
}
