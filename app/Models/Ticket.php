<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';
    protected $dates = ['completed_at'];

    protected $fillable = 
    [
        'subject',
        'content',
        'status',
        "department_id"
    ];

    public function department()
    {
        return $this->belongsTo('App\Models\Department', 'department_id');
    }

    public function personel()
    {
        return $this->belongsTo('App\Models\Personel', 'personel_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'ticket_id');
    }
}
