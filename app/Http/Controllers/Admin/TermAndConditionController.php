<?php

namespace App\Http\Controllers\Admin;

use App\Actions\TermAndCondition\UpdateTermAndConditionAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\TermAndCondition\UpdateTermAndConditionRequest;
use App\Models\TermAndCondition;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TermAndConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('admin.term_and_conditions.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param TermAndCondition $termAndCondition
     * @return View
     */
    public function edit(TermAndCondition $termAndCondition): View
    {
        return view('admin.term_and_conditions.edit')
            ->with([
                'termAndCondition' => $termAndCondition,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTermAndConditionRequest $request
     * @param TermAndCondition $termAndConditionv
     * @param UpdatePrivacyPolicyAction $action
     * @return RedirectResponse
     */
    public function update(UpdateTermAndConditionRequest $request, TermAndCondition $termAndCondition, UpdateTermAndConditionAction $action): RedirectResponse
    {
        try {
            $action->execute($request->validated(), $termAndCondition);
            return redirect()->route('term.condition.index')->withSuccess(__('term_and_condition_updated_successfully'));
        } catch (Exception $ex) {
            return back()->withError(__('something_went_wrong!') . $ex->getMessage());
        }
    }
}
