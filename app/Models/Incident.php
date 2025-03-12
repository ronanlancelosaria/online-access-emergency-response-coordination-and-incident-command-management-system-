<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $fillable =[
    'incident_location',
    'incident_type',
     'incident_date',
      'incident_status',
      'incident_desc',
      'incident_cause',
      'severity_level',
      'incident_report',
      'victim_name',
      'victim_address',
      'victim_age',
      'victim_image',
      'user_id',
      'remarks',
      'res_first_name',
      'res_last_name',
      'res_contact_num',
      'res_address'
            ];

    protected $casts = [
        'incident_location' => 'array',
        'victim_image' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
