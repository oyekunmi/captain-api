<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Certificate extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'name', 'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'vessel',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['vessel_name'];

    /**
     * Get the vessel that owns the certificate.
     */
    public function vessel()
    {
        return $this->belongsTo('App\Vessel');
    }

     /**
     * Get the vessel name for this certificate
     *
     * @return string
     */
    public function getVesselNameAttribute(): string
    {
        return $this->vessel->name;
    }

    /**
     * Get the days to expiry
     *
     * @return bool
     */
    public function getExpiringDaysAttribute()
    {
        return Carbon::today()->diffInDays($this->expiry, false);
    }

}
