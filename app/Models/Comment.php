<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'ticket_comments';

    public function ticket()
    {
        return $this->belongsTo('App\Models\Ticket', 'ticket_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\Personel', 'personel_id');
    }
}
