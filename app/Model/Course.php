<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    /**
     * HasMany Relation to @see \App\Model\TranslationCourse
     *
     * @return HasMany
     */
    public function courseTranslations(): HasMany
    {
        return $this->hasMany(TranslationCourse::class);
    }

    /**
     * @param string $languageCode
     * @return Model|HasMany|object|null
     */
    public function defaultCourseTranslation(string $languageCode = 'en')
    {
        $defaultLang = Language::where('language_code', $languageCode)->first();

        return $this->hasMany(TranslationCourse::class)
            ->where('language_id', $defaultLang->id)
            ->first();
    }
}
