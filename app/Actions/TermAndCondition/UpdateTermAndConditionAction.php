<?php

namespace App\Actions\TermAndCondition;

use App\Models\TermAndCondition;
use Exception;
use Illuminate\Support\Facades\DB;

class UpdateTermAndConditionAction
{
    /**
     * Update privacyPolicy along with media.
     *
     * @param array $data
     * @param TermAndCondition $termAndCondition
     * @return \App\Models\TermAndCondition
     * @throws Exception
     */
    public function execute(array $data, TermAndCondition $termAndCondition)
    {
        DB::beginTransaction();

        try {
            $termAndCondition->update($data);

            // Commit the transaction
            DB::commit();

            return $termAndCondition;
        } catch (Exception $ex) {
            // If an exception occurs, rollback the transaction
            DB::rollback();
            throw $ex;
        }
    }
}
