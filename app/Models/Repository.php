<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    protected $table = 'repositories';
    protected $primaryKey = 'repo_id';
    protected $dateFormat = 'c';
    public $timestamps = true;

    protected $fillable = [
        'RepoName',
        'text',
        'RepoStars',
        'dev_id'
    ];

    public function developer()
    {
        return $this->belongsTo(Dev::class)->withTimestamps();


    }

}
