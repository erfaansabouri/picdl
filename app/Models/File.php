<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    protected $table = 'files';
    protected $guarded = [];

    public function getPrivateDownloadLinkAttribute()
    {
        $f = storage_path($this->path);
        dd($f); // TODO
    }
}
