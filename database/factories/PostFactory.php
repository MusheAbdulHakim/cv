<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model= Post::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(50),
            'slug' => $this->faker->realText(50),
            'thumbnail' => null,
            'category_id'=> Category::factory(),
            'summary' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(30),
            'tags' => implode(',',$this->faker->randomElements(['UI','Video','Music','Anime','Coding','Python','HTML','CSS','Design'])),
        ];
    }
}
