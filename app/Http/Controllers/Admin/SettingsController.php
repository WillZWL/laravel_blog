<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use App\User;
use App\Http\Requests\SettingRequest;

class SettingsController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $settings = Setting::all();

        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function update(SettingRequest $request)
    {
        foreach ($request->all() as $name => $value) {
            if ($name != '_method' && $name != '_token') {
                $setting = Setting::whereName($name)->first();

                $setting->update([
                        'value' => $value,
                    ]);
            }
        }

        //更新设置缓存
        \Cache::forget('settings_array');

        return redirect('admin/settings/index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function store($id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
    }

    public function user()
    {
        $users = User::latest()->paginate(15);

        return view('admin.settings.user', compact('users'));
    }

    public function user_edit($id)
    {
        $user = User::findOrFail($id);
        $users = \App\User::lists('username', 'id', 'email');

        return view('admin.settings.user_edit', compact('user', 'users'));
    }

    public function user_update()
    {
    }

    public function flush()
    {
        \Cache::flush();

        return redirect('admin/settings/index');
    }
}
