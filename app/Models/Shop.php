<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;


    protected $fillable = [
        'shopid',
        'shopname',
        'Address1',
        'Address2',
        'Notes',
        'Remark',
    ];

    protected $casts = [

    ];

    protected $primaryKey = 'id';

    protected $table = 'shop';
}
