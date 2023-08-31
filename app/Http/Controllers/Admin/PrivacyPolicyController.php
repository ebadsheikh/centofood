<?php

namespace App\Http\Controllers\Admin;

use App\Actions\PrivacyPolicy\DeletePrivacyPolicyAction;
use App\Actions\PrivacyPolicy\StorePrivacyPolicyAction;
use App\Actions\PrivacyPolicy\UpdateprivacyPolicyAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\PrivacyPolicy\StorePrivacyPolicyRequest;
use App\Http\Requests\PrivacyPolicy\UpdatePrivacyPolicyRequest;
use App\Models\PrivacyPolicy;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PrivacyPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('admin.privacy_policies.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.privacy_policies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePrivacyPolicyRequest $request
     * @param StorePrivacyPolicyAction $action
     * @return RedirectResponse
     */
    public function store(StorePrivacyPolicyRequest $request, StorePrivacyPolicyAction $action): RedirectResponse
    {
        try {
            $action->execute($request->validated());

            return redirect()->route('privacy.policy.index')->withSuccess(__('privacy_policy_created_successfully'));
        } catch (Exception $ex) {
            return back()->withError(__($ex->getMessage()));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param PrivacyPolicy $privacyPolicy
     * @return View
     */
    public function edit(PrivacyPolicy $privacyPolicy): View
    {
        return view('admin.privacy_policies.edit')
            ->with([
                'privacyPolicy' => $privacyPolicy,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePrivacyPolicyRequest $request
     * @param PrivacyPolicy $privacyPolicy
     * @param UpdatePrivacyPolicyAction $action
     * @return RedirectResponse
     */
    public function update(UpdatePrivacyPolicyRequest $request, PrivacyPolicy $privacyPolicy, UpdateprivacyPolicyAction $action): RedirectResponse
    {
        try {
            $action->execute($request->validated(), $privacyPolicy);
            return redirect()->route('privacy.policy.index')->withSuccess(__('privacy_policy_updated_successfully'));
        } catch (Exception $ex) {
            return back()->withError(__('something_went_wrong!') . $ex->getMessage());
        }
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param PrivacyPolicy $privacyPolicy
     * @param DeletePrivacyPolicyAction $action
     * @return RedirectResponse
     */
    public function destroy(PrivacyPolicy $privacyPolicy, DeletePrivacyPolicyAction $action): RedirectResponse
    {
        try {
            if ($action->execute($privacyPolicy)) {
                return redirect()->route('privacy.policy.index')->withSuccess(__('privacy_policy_deleted_successfully'));
            } else {
                return back()->withError(__('something_went_wrong!'));
            }
        } catch (Exception $ex) {
            return back()->withError(__('something_went_wrong!'));
        }
    }
}
