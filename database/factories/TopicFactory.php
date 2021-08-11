<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    protected $model = Topic::class;

    public function definition()
    {
        $sentence = $this->faker->sentence();

        $user_ids = User::with([])->pluck('id')->toArray();
        $category_ids = Category::with([])->pluck('id')->toArray();

        return [
            'title' => $sentence,
            'body' => $this->faker->text(),
            'excerpt' => $sentence,
            'user_id' => $this->faker->randomElement($user_ids),
            'category_id' => $this->faker->randomElement($category_ids),
        ];
    }
}
