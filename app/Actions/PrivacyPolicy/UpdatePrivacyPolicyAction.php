<?php

namespace App\Actions\PrivacyPolicy;

use App\Models\PrivacyPolicy;
use Exception;
use Illuminate\Support\Facades\DB;

class UpdateprivacyPolicyAction
{
    /**
     * Update privacyPolicy along with media.
     *
     * @param array $data
     * @param PrivacyPolicy $privacyPolicy
     * @return \App\Models\PrivacyPolicy
     * @throws Exception
     */
    public function execute(array $data, PrivacyPolicy $privacyPolicy)
    {
        DB::beginTransaction();

        try {
            $privacyPolicy->update($data);

            // Commit the transaction
            DB::commit();

            return $privacyPolicy;
        } catch (Exception $ex) {
            // If an exception occurs, rollback the transaction
            DB::rollback();
            throw $ex;
        }
    }
}
