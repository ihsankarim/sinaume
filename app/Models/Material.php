<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['module_id', 'type', 'content', 'file_path'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}

