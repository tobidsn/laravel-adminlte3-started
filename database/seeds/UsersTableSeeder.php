<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
    	$users = [];
    	$faker = Faker\Factory::create();
    	for($i=0;$i<5;$i++){
    		$users[$i] = [
                'name'       => $faker->name,
                'email'      => $faker->unique()->safeEmail,
                'password'   => bcrypt('123456'),
                'usertype'   => 'admin',
                'created_at' => Carbon\Carbon::now(),
    		];
    	}

        $users[6] = [
            'name'       => $faker->name,
            'email'      => 'admin@admin.com',
            'password'   => bcrypt('admin1'),
            'usertype'   => 'admin',
            'created_at' => Carbon\Carbon::now(),
        ];

        $users[7] = [
            'name'       => $faker->name,
            'email'      => 'editor@editor.com',
            'password'   => bcrypt('editor1'),
            'usertype'   => 'editor',
            'created_at' => Carbon\Carbon::now(),
        ];

    	DB::table('users')->insert($users);
    }
}
