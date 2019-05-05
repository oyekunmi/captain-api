<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vessel extends Model
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
        // 'token',
    ];


    /**
     * Get the certificates for the vessel.
     */
    public function certificates()
    {
        return $this->hasMany('App\Certificate');
    }
}
