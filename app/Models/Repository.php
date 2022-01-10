<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    protected $table = 'repositories';
    protected $primaryKey = 'id';
    protected $dateFormat = 'c';
    public $timestamps = true;

    protected $fillable = [
        'repo_name',
        'text',
        'repo_stars',
        'dev_id'
    ];

    public function developer()
    {
        return $this->belongsTo(Dev::class)->withTimestamps();
    }

}
