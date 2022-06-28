<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $table = 'rental';

    protected $fillable = [
        'user_id',
        'computer_id',
        'is_student',
        'insurance',
        'duration',
        'total_price',
        'rent_time',
        'status',
        'remark',
    ];

    public function Computer()
    {
        return $this->hasone(Computer::class,'computer_id','computer_id');
    }

    public function User()
    {
        return $this->hasone(User::class,'id','user_id');
    }
}
