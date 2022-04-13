<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Item;
use App\Models\Sweet;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory()->count(10)->create();

        $this->likeRandomly();
    }

    public function likeRandomly()
    {
        $users = User::all();
        $sweets = Sweet::factory()->count(10)->create();
        $items = Item::factory()->count(10)->create();
        $books = Book::factory()->count(10)->create();

        foreach ($users as $user) {
            for ($i = 0; $i < random_int(1, 10); $i++) {
                $user->likedSweets()->attach($sweets->random());
                $user->likedItems()->attach($items->random());
                $user->likedBooks()->attach($books->random());
            }
        }
    }
}
