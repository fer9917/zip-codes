<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Zips extends Model {
    use HasFactory;
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'zip_codes';

    /**
     * @var array
     */
    protected $fillable = ['zip_code', 'locality', 'municipality', 'federal_entity'];

    /**
     * Get the locality associated with the zip code.
     */
    public function getLocality(): HasOne{
        return $this->hasOne(Locality::class, 'key', 'locality');
    }

    /**
     * Get the federal entity associated with the zip code.
     */
    public function getFederalEntity(): HasOne{
        return $this->hasOne(FederalEntity::class, 'key', 'federal_entity');
    }

    /**
     * Get the settlements associated with the zip code.
     */
    public function getSettlements(): HasMany{
        return $this->hasMany(Settlements::class, 'zip_code', 'zip_code');
    }

    /**
     * Get the municipality associated with the zip code.
     */
    public function getMunicipality(): HasOne{
        return $this->hasOne(Municipality::class, 'key', 'municipality');
    }
}
