<?php
namespace App\Traits;
use App\Models\File;

trait HasFile {
    public function file()
    {
        return $this->belongsTo(File::class);
    }

    public function getFilePathAttribute()
    {
        return $this->file() ? $this->file->path : null;
    }
}
