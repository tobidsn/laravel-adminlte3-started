<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
	        	'key' => 'site_name',
	        	'value' => 'Laravel'
	        ], 
	        [
	        	'key' => 'site_email',
	        	'value' => 'info@laravel.com'
	        ], 
	        [
	        	'key' => 'site_image',
	        	'value' => 'hiring.jpg'
	        ],
	        [
	        	'key' => 'site_meta_title',
	        	'value' => 'Laravel'
	        ],
	        [
	        	'key' => 'site_meta_description',
	        	'value' => 'Laravel'
	        ],
	        [
	        	'key' => 'terms_title',
	        	'value' => 'Terms Title'
	        ],
	        [
	        	'key' => 'terms_content',
	        	'value' => 'Terms content'
	        ],
	        [
	        	'key' => 'policy_title',
	        	'value' => 'Policy title'
	        ],
	        [
	        	'key' => 'policy_content',
	        	'value' => 'Policy content'
	        ],
	        [
	        	'key' => 'info',
	        	'value' => 'German sales tax identification number'
	        ],
	        [
	        	'key' => 'address',
	        	'value' => 'bd breyton design gmbh'
	        ],
	        [
	        	'key' => 'phone',
	        	'value' => '+49 7771 5270'
	        ],
	        [
	        	'key' => 'fax',
	        	'value' => '+49 7771 7068'
	        ],
	        [
	        	'key' => 'email',
	        	'value' => 'info@saga.com'
	        ],
	        [
	        	'key' => 'contact_form_email',
	        	'value' => 'contactform@saga.com'
	        ],
	        [
	        	'key' => 'about_title',
	        	'value' => 'About titlt'
	        ],
	        [
	        	'key' => 'about_content',
	        	'value' => 'About content'
	        ],
        ];

        DB::table('settings')->insert($data);
    }
}
