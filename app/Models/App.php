<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class App extends Model
{
    use HasFactory;

    public function Images()
    {
        return $this->hasMany(AppImage::class,'app_id','id')->whereis_deleted("0")->orderBy('id','DESC');
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function logo(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? env('BASE_URL_IMAGE').$value : null,
        );
    }

    protected function appQr(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? env('BASE_URL_IMAGE').$value : null,
        );
    }
}
