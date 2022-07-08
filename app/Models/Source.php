<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Source extends Model
{
    protected $table = 'sources';
    protected $guarded = [];

    public function getDownloadLink($mediaId)
    {
        switch ($this->name){
            case 'shutterstock':
                $link = licenseShutterstock($mediaId);
                if($link)
                {
                    $file = $this->saveMediaToFiles($link);
                    if($file)
                    {
                        $download = $this->saveToDownloads($mediaId, $file->id);
                        if($download)
                        {
                            return $file->private_download_link;
                        }
                    }
                }

        }

        dd('Can not get download link for this source');
    }

    public function saveToDownloads($mediaId, $fileId)
    {
        $download = new Download();
        $download->source_id = $this->id;
        $download->code = $mediaId;
        $download->user_id = Auth::check() ? Auth::id() : null;
        $download->file_id = $fileId;
        $download->save();
        return $download;
    }


    public function saveMediaToFiles($link)
    {
        $contents = file_get_contents($link);
        $fileName = Str::random(16). '.' . 'jpg';
        Storage::disk('public')->put($fileName, $contents);
        $file = File::query()
            ->create([
                'path' => $fileName,
            ]);// TODO
        return $file;
    }
}
