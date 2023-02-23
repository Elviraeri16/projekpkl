<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// use Spatie\MediaLibrary\HasMedia;
// use Spatie\MediaLibrary\InteractsWithMedia;
// use Spatie\MediaLibrary\MediaCollections\Models\Media;

// class Company extends Model implements HasMedia
class Company extends Model
{
    // use InteractsWithMedia;

    public $table      = 'companies';
    protected $appends = [
        'logo',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'name',
        'gambar',
        'deskripsi',
        'alamat',

        'created_at',
        'updated_at',
        'deleted_at',
        'slug',
    ];

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')->width(50)->height(50);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'company_id', 'id');
    }

    public function getLogoAttribute()
    {
        $file = $this->getMedia('logo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
}
