<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\User;
use Brick\Math\BigInteger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table("posts")->insert([
        "title"=> "hello",
        "content"=> "bye",
        "user_id" =>"1"
       ]);
    }
}