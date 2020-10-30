<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccessReason extends Model
{
    /**
     * HasMany Relation to @see \App\Model\TranslationAccessReason
     *
     * @return HasMany
     */
    public function accessReasonTranslations(): HasMany
    {
        return $this->hasMany(TranslationAccessReason::class);
    }
}
