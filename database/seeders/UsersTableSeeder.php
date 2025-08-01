<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'LE VAN TAM',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$HgL4RJkUlfdWfoRqCqtR1essi7QoNWIcEn7p7GAMNVteLF9XO0N.K',
                'remember_token' => 'U1UveKZv6IwXiE4KjioNnzXEHjvWvzQLrCi5sQq8XpyrRDEQcDDCVwjNhZvG',
                'created_at' => '2025-07-23 07:45:41',
                'updated_at' => '2025-07-23 07:45:41',
                'role_id' => 1,
            ),
        ));
        
        
    }
}