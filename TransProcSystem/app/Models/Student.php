<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'email', 'contact_number', 'section_id'];

    // Student belongs to Section
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
