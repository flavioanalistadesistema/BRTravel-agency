<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aeroport extends Model
{
    use HasFactory;
    /**
     * The table associated with the model table STUDENTS.
     *
     * @var string
     */
    protected $table = 'aeroports';

    /**
     * The primary key associated with the table ID.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'acronyms',
        'aeroport'
    ];
}
