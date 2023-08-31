<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mail\StoreMailRequest;
use App\Models\Setting;
use App\Models\SettingType;
use App\Services\SettingService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MailSettingController extends Controller
{
    private SettingService $settingsService;

    public function __construct(SettingService $settingsService)
    {
        $this->settingsService = $settingsService;
    }

    /**
     * store the specified resource in storage.
     *
     * @return View
     */
    public function index(): View
    {
        $settingTypes = SettingType::all();
        $mail = Setting::pluck('value', 'key')->toArray();
        return view('admin.mail.index')
            ->with(['mail' => $mail, 'settingTypes' => $settingTypes]);
    }

    /**
     * store the specified resource in storage.
     *
     * @param StoreMailRequest $request
     * @return RedirectResponse
     */
    public function store(StoreMailRequest $request): RedirectResponse
    {
        try {
            $data = $request->validated();
            $settingType = SettingType::find($data['setting_type_id']);
            $this->settingsService->updateSettings($data, $settingType);
            return back()->withSuccess('Settings successfully updated');
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());
        }
    }
}
