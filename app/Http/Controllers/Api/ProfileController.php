<?php

namespace App\Http\Controllers\Api;

use App\Actions\ApiProfile\UpdateProfileAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Profile\UpdateProfileRequest;
use App\Models\User;
use Exception;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateProfileRequest  $request
     * @param  User  $user
     * @param  UpdateProfileAction  $action
     * @return RedirectResponse
     */
    public function updateProfile(UpdateProfileRequest $request, User $user, UpdateProfileAction $action)
    {
        try {
            $action->execute($request->validated(), $user);

            // Get the URL of the user's profile image
            $imageUrl = $user->getFirstMediaUrl('profile_image');

            // Return success response
            return response()->json([
                'user' => $user,
                'profile_image_url' => $imageUrl,
            ], 200);
        } catch (ValidationException $ex) {
            return response()->json($ex->errors(), 422);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }
}
