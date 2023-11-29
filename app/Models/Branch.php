<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'branchid',
        'Branchname',
        'Address1',
        'Address2',
        'DateOpened',
        'Type',
        'Notes',
        'Remark',
    ];
    
    protected $casts = [

    ];

    protected $primaryKey = 'id';

    protected $table = 'branch';
}
