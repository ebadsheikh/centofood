<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AppThemeSettingResource;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;

class AppThemeSettingController extends Controller
{
    /**
     * Retrieve all the settings and return them as a collection of AppThemeSettingResource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection|\Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $setting = Setting::where('key', ['app_main_color_light', 'app_main_color_dark', 'app_second_color_light', 'app_second_color_dark', 'app_accent_color_light', 'app_accent_color_dark', 'app_background_color_light', 'app_background_color_dark'])->first();
            return new AppThemeSettingResource($setting);
        } catch (Exception $ex) {
            return response()->json(['error' => 'No Content'], 206);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
