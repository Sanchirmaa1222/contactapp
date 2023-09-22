<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;
use App\Http\Controllers\ContactController;

class Task extends Model
{
    use HasFactory;

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

}