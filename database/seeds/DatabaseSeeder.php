<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
use App\Post as Post;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('PostsTableSeeder');
	}

}

/**
*
*/
class PostsTableSeeder extends Seeder
{

	public function run()
	{

		$faker = Faker::create();
		$i = 0;

		while ($i <= 10) {
			Post::create([
				'user_id' => 1,
				'title' => $faker->sentence,
				'body' => $faker->paragraph,
				'publish' => 1
			]);
			$i++;
		}

	}

}
