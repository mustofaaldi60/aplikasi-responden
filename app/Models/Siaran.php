<?php

namespace App\Models;

use App\Models\Acara;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siaran extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'siarans';

    protected $guarded = ['id'];

    protected $fillable = ['nama', 'slug', 'frekuensi'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    /**
     * Get the acaras that owns the Siaran
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acaras() : HasMany
    {
        return $this->hasMany(Acara::class);
    }
}
