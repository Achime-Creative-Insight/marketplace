<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class, 50)->create()->each(function ($user) {
            $user->products()->save(factory(App\Models\Product::class, rand(0,5), [
                'user_id' => $user->id
            ])->make());
        });
    }
}
