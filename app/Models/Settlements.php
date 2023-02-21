<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Settlements extends Model{
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
    protected $table = 'settlements';

    /**
     * @var array
     */
    protected $fillable = ['key', 'name', 'zone_type'];

    /**
     * Get the federal entity associated with the zip code.
     */
    public function getSettlementType(): HasOne{
        return $this->hasOne(SettlementType::class, 'key', 'settlement_type');
    }
}
