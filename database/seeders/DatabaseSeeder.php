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


        // User::create([
        //     'name' => 'Ahkam Mubarok',
        //     'email' => 'ahkam.mubarok@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Mahdalena',
        //     'email' => 'mahdalena@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(25)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit Ke Tiga',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque adipisci 
        //     placeat optio aut corporis ab eos, autem laborum alias officiis, libero atque? Temporibus 
        //     harum, qui debitis iste ratione vero ullam,delectus quia sunt at, amet eaque nisi eum in 
        //     rem labore. Dolores, aliquam vitae magni eveniet nihil atque aspernatur enim a quisquam 
        //     quaerat, quos eius tempore. Architecto, est hic corrupti, ea nostrum fugit nemo nobis 
        //     tenetur, unde placeat praesentium consequatur animi quod in illum dolorem dolor! Placeat 
        //     doloremque quis deserunt autem, illo ab reiciendis, obcaecati praesentium, amet veniam 
        //     rerum soluta quos recusandae at maiores magni dolorem eos a? 
        //     Consequatur, laboriosam',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit Ke Tiga',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque adipisci 
        //     placeat optio aut corporis ab eos, autem laborum alias officiis, libero atque? Temporibus 
        //     harum, qui debitis iste ratione vero ullam,delectus quia sunt at, amet eaque nisi eum in 
        //     rem labore. Dolores, aliquam vitae magni eveniet nihil atque aspernatur enim a quisquam 
        //     quaerat, quos eius tempore. Architecto, est hic corrupti, ea nostrum fugit nemo nobis 
        //     tenetur, unde placeat praesentium consequatur animi quod in illum dolorem dolor! Placeat 
        //     doloremque quis deserunt autem, illo ab reiciendis, obcaecati praesentium, amet veniam 
        //     rerum soluta quos recusandae at maiores magni dolorem eos a? 
        //     Consequatur, laboriosam',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit Ke Tiga',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque adipisci 
        //     placeat optio aut corporis ab eos, autem laborum alias officiis, libero atque? Temporibus 
        //     harum, qui debitis iste ratione vero ullam,delectus quia sunt at, amet eaque nisi eum in 
        //     rem labore. Dolores, aliquam vitae magni eveniet nihil atque aspernatur enim a quisquam 
        //     quaerat, quos eius tempore. Architecto, est hic corrupti, ea nostrum fugit nemo nobis 
        //     tenetur, unde placeat praesentium consequatur animi quod in illum dolorem dolor! Placeat 
        //     doloremque quis deserunt autem, illo ab reiciendis, obcaecati praesentium, amet veniam 
        //     rerum soluta quos recusandae at maiores magni dolorem eos a? 
        //     Consequatur, laboriosam',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit Ke Tiga',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque adipisci 
        //     placeat optio aut corporis ab eos, autem laborum alias officiis, libero atque? Temporibus 
        //     harum, qui debitis iste ratione vero ullam,delectus quia sunt at, amet eaque nisi eum in 
        //     rem labore. Dolores, aliquam vitae magni eveniet nihil atque aspernatur enim a quisquam 
        //     quaerat, quos eius tempore. Architecto, est hic corrupti, ea nostrum fugit nemo nobis 
        //     tenetur, unde placeat praesentium consequatur animi quod in illum dolorem dolor! Placeat 
        //     doloremque quis deserunt autem, illo ab reiciendis, obcaecati praesentium, amet veniam 
        //     rerum soluta quos recusandae at maiores magni dolorem eos a? 
        //     Consequatur, laboriosam',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
