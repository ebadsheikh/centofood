<?php

namespace App\Actions\PrivacyPolicy;

use App\Models\PrivacyPolicy;

class DeletePrivacyPolicyAction
{
    /**
     * Delete PrivacyPolicy and its translations.
     *
     * @param PrivacyPolicy $privacyPolicy
     *
     * @return array Contains 'isDelete' boolean value for deletion status.
     */
    public function execute(PrivacyPolicy $privacyPolicy)
    {
        $privacyPolicy->deleteTranslations();
        $isDeleted = $privacyPolicy->delete();
        return $isDeleted;
    }
}
