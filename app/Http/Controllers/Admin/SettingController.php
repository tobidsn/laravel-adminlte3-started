<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use Cache;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('_admin.pages.setting');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = array(
            'site_name' => $request->get('site_name'), 
            'site_email' => $request->get('site_email'),
            'site_meta_title' => $request->get('site_meta_title'),
            'site_meta_description' => $request->get('site_meta_description'),
        );

        $value = Cache::forget('settings');

        foreach ($data as $key => $value) {
            
            Setting::where('key', $key)->update([
                'value' => $value,
            ]);
        }

        return redirect('magic/settings')->with('success', 'Setting updated!');
    }


    public function termpolicy()
    {   
        return view('_admin.pages.tp')->with('title', 'Terms & Policy');
    }

    public function updatetp(Request $request)
    {
        $data = array(
            'terms_title' => $request->get('terms_title'), 
            'terms_content' => $request->get('terms_content'),
            'policy_title' => $request->get('policy_title'),
            'policy_content' => $request->get('policy_content')
        );

        $value = Cache::forget('settings');
        foreach ($data as $key => $value) {
            
            Setting::where('key', $key)->update([
                'value' => $value,
            ]);
        }

        return redirect('magic/terms_policy')->with('success', 'Terms & Policy Successfully Updated');
    }

    public function contactDetail()
    {   
        return view('_admin.pages.contact_detail');
    }

    public function updateContact(Request $request)
    {
        $data = array(
            'info' => $request->get('info'), 
            'address' => $request->get('address'),
            'lat' => $request->get('lat'),
            'lng' => $request->get('lng'),
            'gmaps_url' => $request->get('gmaps_url'),
            'phone' => $request->get('phone'),
            'fax' => $request->get('fax'),
            'email' => $request->get('email'),
            'contact_form_email' => $request->get('contact_form_email'),
        );

        $value = Cache::forget('settings');

        foreach ($data as $key => $value) {
            
            Setting::where('key', $key)->update([
                'value' => $value,
            ]);
        }

         \Session::flash('success.message', 'Contact Detail Successfully Updated');
        return redirect('magic/contact/detail');
    }

    public function about()
    {   
        return view('_admin.pages.about');
    }

    public function updateabout(Request $request)
    {
        $data = array(
            'about_title' => $request->get('about_title'), 
            'about_content' => $request->get('about_content')
        );

        $value = Cache::forget('settings');
        
        foreach ($data as $key => $value) {
            
            Setting::where('key', $key)->update([
                'value' => $value,
            ]);
        }

         \Session::flash('success.message', 'About Data Successfully Updated');
        return redirect('magic/homepage/about');
    }
}
