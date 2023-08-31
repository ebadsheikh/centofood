<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class TermAndCondition extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use SoftDeletes;

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    public array $translatedAttributes = ['description'];

    /**
     * The attributes that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
        'slug'
    ];

    /**
     * Get a new slug attribute instance.
     *
     * @return Attribute
     */
    protected function slug(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Str::slug($value)
        );
    }

    /**
     * Get the TermAndConditionTranslation for the termAndCondition.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function termAndConditionTranslations(): HasMany
    {
        return $this->hasMany(TermAndConditionTranslation::class)->withTrashed();
    }
}
