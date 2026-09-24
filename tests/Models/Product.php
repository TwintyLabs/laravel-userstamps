<?php

namespace TwintyLabs\Userstamps\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TwintyLabs\Userstamps\Concerns\HasUserstamps;

class Product extends Model
{
    use HasUserstamps;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
