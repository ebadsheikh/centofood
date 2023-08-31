<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TermAndConditionTranslation extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
        'term_and_condition_id',
        'locale',
        'description'
    ];
}
