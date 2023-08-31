<?php

namespace App\Actions\PrivacyPolicy;

use App\Models\PrivacyPolicy;
use Exception;
use Illuminate\Support\Facades\DB;

class StorePrivacyPolicyAction
{
    /**
     * Store a newly created PrivacyPolicy in storage.
     *
     * @param  array  $data
     * @return PrivacyPolicy
     * @throws Exception
     */
    public function execute(array $data): PrivacyPolicy
    {
        DB::beginTransaction();

        try {
            $privacyPolicy = PrivacyPolicy::create($data);

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
