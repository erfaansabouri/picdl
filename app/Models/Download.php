<?php

namespace App\Models;

use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Download extends Model
{
    protected $table = 'downloads';
    protected $guarded = [];

    public function source()
    {
        return $this->belongsTo(Source::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function file()
    {
        return $this->belongsTo(File::class);
    }

    public static function getDownloadLink($sourceId, $mediaId)
    {
        $link = self::getLinkFromDownloads($sourceId, $mediaId);
        if(!$link) {
            $link = self::getLinkFromThirdPartySource($sourceId, $mediaId);
        }
        return $link;
    }

    private static function getLinkFromDownloads($sourceId, $mediaId)
    {
        $download = self::where('source_id', $sourceId)
            ->where('code', $mediaId)
            ->first();
        if($download) {
            return $download->file;
        }
        return false;
    }

    private static function getLinkFromThirdPartySource($sourceId, $mediaId)
    {
        $source = Source::find($sourceId);
        if($source) {
            return $source->getDownloadLink($mediaId);
        }
        return false;
    }

    public function getShamsiCreatedAtAttribute()
    {
        if($this->created_at)
            return Verta::instance($this->created_at)->format('Y-n-j H:i:s');
        return null;
    }

}
