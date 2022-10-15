<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $table = 'tbl_movies'; // name of the table if name differrent from default
    protected $primaryKey = 'm_id'; //name of primarykey if name different from default ID

}
