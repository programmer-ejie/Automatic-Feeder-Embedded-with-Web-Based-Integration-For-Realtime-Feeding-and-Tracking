<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineList extends Model
{
    use HasFactory;
    protected $table = 'machine_lists';

    protected $fillable = [
        'machine_name', 
        'development_board',
        'ip_address',
        'scheduled_time',
    ];

   
}
