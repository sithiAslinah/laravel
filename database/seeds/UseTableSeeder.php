// app/database/seeds/UserTableSeeder.php

<?php

class UseTableSeeder extends Seeder
{

public function run()
{
    DB::table('use')->delete();
    User::create(array(
        'name'     => 'Sithi',
        'username' => 'sevilayha',
        'email'    => 'sithi_aslinah@yahoo.com.my',
        'password' => Hash::make('awesome'),
    ));
}

}
