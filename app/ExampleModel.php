<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class ExampleModel extends Eloquent {
    /**
     * Define table name, as it may assumed table name is pluralized.
     *
     * @var string
     */
    protected $table = '';

    /**
     * Detects if there's timestamps (like in Laravel), disable by setting it as 'false'.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     *
     *
     * @var string[]
     */
    protected $fillable = [];
}