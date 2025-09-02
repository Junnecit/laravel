<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customerticketModel extends Model
{
protected $table = 't_customer_ticket';
protected $fillable = ['id','customer_Name','Subject','Category','Priority','Status','Assigned_to'];
}
