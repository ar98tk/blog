<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;
class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create(['display_name' => 'Site title', 'key' => 'site_title', 'value' => 'Blog System', 'type' => 'text', 'section' => 'General', 'ordering' => 1]);
        Setting::create([ 'display_name' => 'Site Slogan', 'key' => 'site_slogan', 'value' => 'Wonderful Blog', 'details' => null, 'type' => 'text', 'section' => 'General', 'ordering' => 2]);
        Setting::create([ 'display_name' => 'Site Description', 'key' => 'site_description', 'value' => 'Blog website to manage useful articles', 'details' => null, 'type' => 'text', 'section' => 'General', 'ordering' => 3]);
        Setting::create([ 'display_name' => 'Site Keywords', 'key' => 'site_keywords', 'value' => 'Blog, multi writer', 'details' => null, 'type' => 'text', 'section' => 'General', 'ordering' => 4]);
        Setting::create([ 'display_name' => 'Site Email', 'key' => 'site_email', 'value' => 'admin@admin.test', 'details' => null, 'type' => 'text', 'section' => 'General', 'ordering' => 5]);
        Setting::create([ 'display_name' => 'Site Status', 'key' => 'site_status', 'value' => 'Active', 'details' => null, 'type' => 'text', 'section' => 'General', 'ordering' => 6]);
        Setting::create([ 'display_name' => 'Admin Title', 'key' => 'admin_title', 'value' => 'Blog', 'details' => null, 'type' => 'text', 'section' => 'General', 'ordering' => 7]);
        Setting::create([ 'display_name' => 'Phone Number', 'key' => 'phone_number', 'value' => '0123456789', 'details' => null, 'type' => 'text', 'section' => 'General', 'ordering' => 8]);
        Setting::create([ 'display_name' => 'Address', 'key' => 'address', 'value' => 'Address Here', 'details' => null, 'type' => 'text', 'section' => 'General', 'ordering' => 9]);
        Setting::create([ 'display_name' => 'Map Latitude', 'key' => 'address_latitude', 'value' => '21.671914', 'details' => null, 'type' => 'text', 'section' => 'General', 'ordering' => 10]);
        Setting::create([ 'display_name' => 'Map Longitude', 'key' => 'address_longitude', 'value' => '39.173875', 'details' => null, 'type' => 'text', 'section' => 'General', 'ordering' => 11]);
        Setting::create([ 'display_name' => 'Google Maps API Key', 'key' => 'google_maps_api_key', 'value' => null, 'details' => null, 'type' => 'text', 'section' => 'Social Accounts', 'ordering' => 1]);
        Setting::create([ 'display_name' => 'Google Recaptcha API Key', 'key' => 'google_recaptcha_api_key', 'value' => null, 'details' => null, 'type' => 'text', 'section' => 'Social Accounts', 'ordering' => 2]);
        Setting::create([ 'display_name' => 'Google Analytics Client ID', 'key' => 'google_analytics_client_id', 'value' => null, 'details' => null, 'type' => 'text', 'section' => 'Social Accounts', 'ordering' => 3]);
        Setting::create([ 'display_name' => 'Facebook ID', 'key' => 'facebook_id', 'value' => '#', 'details' => null, 'type' => 'text', 'section' => 'Social Accounts', 'ordering' => 4]);
        Setting::create([ 'display_name' => 'Twitter ID', 'key' => 'twitter_id', 'value' => '#', 'details' => null, 'type' => 'text', 'section' => 'Social Accounts', 'ordering' => 5]);
        Setting::create([ 'display_name' => 'Instagram ID', 'key' => 'instagram_id', 'value' => '#', 'details' => null, 'type' => 'text', 'section' => 'Social Accounts', 'ordering' => 6]);
        Setting::create([ 'display_name' => 'Patreon ID', 'key' => 'flickr_id', 'value' => '#', 'details' => null, 'type' => 'text', 'section' => 'Social Accounts', 'ordering' => 7]);
        Setting::create([ 'display_name' => 'Youtube ID', 'key' => 'youtube_id', 'value' => '#', 'details' => null, 'type' => 'text', 'section' => 'Social Accounts', 'ordering' => 8]);
    }
}
