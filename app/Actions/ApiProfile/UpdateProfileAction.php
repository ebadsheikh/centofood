<?php

namespace App\Actions\ApiProfile;

use App\Models\Driver;
use App\Models\User;

class UpdateProfileAction
{
    /**
     * Update the given user and driver.
     *
     * @param array $data
     * @param \App\Models\User $user
     * @param \App\Models\Driver $driver
     * @return \App\Models\User
     */
    public function execute(array $data, User $user)
    {
        $user->update($data);

        if (array_key_exists('image', $data)) {
            $user->media()->delete();
            $user->addMedia($data['image'])->toMediaCollection('user.images');
        }

        return $user; // Returns an instance of \App\Models\User
    }
}
