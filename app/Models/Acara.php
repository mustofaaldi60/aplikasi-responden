<?php

namespace App\Models;

use App\Models\Siaran;
use App\Models\Responden;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Acara extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'acaras';

    protected $guarded = ['id'];

    protected $fillable = ['nama','slug','jenis','penyiar','siaran_id','hari','jam'];

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
     * Get the siaran that owns the Acara
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function siaran(): BelongsTo
    {
        return $this->belongsTo(Siaran::class);
    }

    /**
     * Get the resondens that owns the Acara
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function respondens(): HasMany
    {
        return $this->hasMany(Responden::class);
    }


}
