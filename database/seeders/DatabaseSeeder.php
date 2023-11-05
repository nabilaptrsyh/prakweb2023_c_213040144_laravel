<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      

        // User::create ([
        //     'name' => 'Nabila Putri Aisyah Insirawati',
        //     'email' => 'lllalanabila300@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create ([
        //     'name' => 'Putri Aisyah',
        //     'email' => 'Putriaisyah@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-progamming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug'=> 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis cum eius odit, recusandae unde placeat quia libero soluta dolorem aliquam sit vitae explicabo quas animi enim magnam necessitatibus, quos inventore facilis commodi repudiandae provident quam! Unde dicta totam soluta perferendis odio omnis magni laborum doloribus aliquam explicabo culpa asperiores necessitatibus voluptate reprehenderit laudantium non, illo incidunt aliquid! Aliquam illum molestias voluptas quam eum, sint dolores! Fuga vitae repellat distinctio quas officia quod sit? Est nam consequuntur accusantium voluptas quidem cupiditate sed iure dicta culpa explicabo libero harum ab perferendis officia,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis cum eius odit, recusandae unde placeat quia libero soluta dolorem aliquam sit vitae explicabo quas animi enim magnam necessitatibus, quos inventore facilis commodi repudiandae provident quam! Unde dicta totam soluta perferendis odio omnis magni laborum doloribus aliquam explicabo culpa asperiores necessitatibus voluptate reprehenderit laudantium non, illo incidunt aliquid! Aliquam illum molestias voluptas quam eum, sint dolores! Fuga vitae repellat distinctio quas officia quod sit? Est nam consequuntur accusantium voluptas quidem cupiditate sed iure dicta culpa explicabo libero harum ab perferendis officia, dolorum ipsum earum praesentium esse commodi mollitia at nemo facere.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]); 

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug'=> 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis cum eius odit, recusandae unde placeat quia libero soluta dolorem aliquam sit vitae explicabo quas animi enim magnam necessitatibus, quos inventore facilis commodi repudiandae provident quam! Unde dicta totam soluta perferendis odio omnis magni laborum doloribus aliquam explicabo culpa asperiores necessitatibus voluptate reprehenderit laudantium non, illo incidunt aliquid! Aliquam illum molestias voluptas quam eum, sint dolores! Fuga vitae repellat distinctio quas officia quod sit? Est nam consequuntur accusantium voluptas quidem cupiditate sed iure dicta culpa explicabo libero harum ab perferendis officia,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis cum eius odit, recusandae unde placeat quia libero soluta dolorem aliquam sit vitae explicabo quas animi enim magnam necessitatibus, quos inventore facilis commodi repudiandae provident quam! Unde dicta totam soluta perferendis odio omnis magni laborum doloribus aliquam explicabo culpa asperiores necessitatibus voluptate reprehenderit laudantium non, illo incidunt aliquid! Aliquam illum molestias voluptas quam eum, sint dolores! Fuga vitae repellat distinctio quas officia quod sit? Est nam consequuntur accusantium voluptas quidem cupiditate sed iure dicta culpa explicabo libero harum ab perferendis officia, dolorum ipsum earum praesentium esse commodi mollitia at nemo facere.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug'=> 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis cum eius odit, recusandae unde placeat quia libero soluta dolorem aliquam sit vitae explicabo quas animi enim magnam necessitatibus, quos inventore facilis commodi repudiandae provident quam! Unde dicta totam soluta perferendis odio omnis magni laborum doloribus aliquam explicabo culpa asperiores necessitatibus voluptate reprehenderit laudantium non, illo incidunt aliquid! Aliquam illum molestias voluptas quam eum, sint dolores! Fuga vitae repellat distinctio quas officia quod sit? Est nam consequuntur accusantium voluptas quidem cupiditate sed iure dicta culpa explicabo libero harum ab perferendis officia,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis cum eius odit, recusandae unde placeat quia libero soluta dolorem aliquam sit vitae explicabo quas animi enim magnam necessitatibus, quos inventore facilis commodi repudiandae provident quam! Unde dicta totam soluta perferendis odio omnis magni laborum doloribus aliquam explicabo culpa asperiores necessitatibus voluptate reprehenderit laudantium non, illo incidunt aliquid! Aliquam illum molestias voluptas quam eum, sint dolores! Fuga vitae repellat distinctio quas officia quod sit? Est nam consequuntur accusantium voluptas quidem cupiditate sed iure dicta culpa explicabo libero harum ab perferendis officia, dolorum ipsum earum praesentium esse commodi mollitia at nemo facere.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]); 

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug'=> 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis cum eius odit, recusandae unde placeat quia libero soluta dolorem aliquam sit vitae explicabo quas animi enim magnam necessitatibus, quos inventore facilis commodi repudiandae provident quam! Unde dicta totam soluta perferendis odio omnis magni laborum doloribus aliquam explicabo culpa asperiores necessitatibus voluptate reprehenderit laudantium non, illo incidunt aliquid! Aliquam illum molestias voluptas quam eum, sint dolores! Fuga vitae repellat distinctio quas officia quod sit? Est nam consequuntur accusantium voluptas quidem cupiditate sed iure dicta culpa explicabo libero harum ab perferendis officia,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis cum eius odit, recusandae unde placeat quia libero soluta dolorem aliquam sit vitae explicabo quas animi enim magnam necessitatibus, quos inventore facilis commodi repudiandae provident quam! Unde dicta totam soluta perferendis odio omnis magni laborum doloribus aliquam explicabo culpa asperiores necessitatibus voluptate reprehenderit laudantium non, illo incidunt aliquid! Aliquam illum molestias voluptas quam eum, sint dolores! Fuga vitae repellat distinctio quas officia quod sit? Est nam consequuntur accusantium voluptas quidem cupiditate sed iure dicta culpa explicabo libero harum ab perferendis officia, dolorum ipsum earum praesentium esse commodi mollitia at nemo facere.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]); 
    }
}
