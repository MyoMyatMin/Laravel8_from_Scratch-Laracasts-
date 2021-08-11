<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
Use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
{  $user =  User::factory()->create([
    'name' => 'John Doe'
    ]);
    Post::factory(5)->create([
        'user_id' => $user->id
    ]);
     /*   User::truncate();
        Post::truncate();
        Category::truncate();
        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet.</p>',
            'body'  => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, harum velit tenetur aperiam enim expedita quasi tempora blanditiis, neque, perspiciatis hic inventore praesentium incidunt quibusdam officia corrupti asperiores aliquam modi doloremque dolore odit id accusantium. Quaerat dolor expedita quo blanditiis veritatis sequi. Tempore consectetur temporibus nihil aspernatur? Cumque nesciunt neque nemo error tempora quam veniam possimus suscipit illo quis ipsam dolores dolorem in consequuntur placeat, totam at, cupiditate, vitae nostrum eos? Voluptates deserunt tenetur aperiam unde accusantium, cupiditate illum placeat! Excepturi voluptatem voluptate laborum. Pariatur optio perferendis sint animi, deserunt numquam nihil ipsa officia, soluta ullam eos necessitatibus accusantium autem obcaecati eum facere sed? Corporis quibusdam reiciendis distinctio sequi reprehenderit temporibus facilis voluptas ipsam ratione commodi, molestiae, impedit cumque eaque hic atque, tempora ex voluptatum ut accusamus veniam ullam. Ducimus commodi itaque voluptatum mollitia tenetur, libero natus enim laudantium perspiciatis minus porro cum eum aspernatur! Aut similique quisquam quidem esse praesentium? Eius tempore ipsam error eos, eaque rem optio earum harum. Consectetur molestias, recusandae a dicta amet reiciendis sit soluta beatae, doloribus quod numquam, dolore exercitationem obcaecati voluptas itaque? Doloribus sequi laboriosam maiores error voluptatem tenetur rerum. Iusto cumque officia repellendus, illum ipsum nulla voluptate deleniti modi quidem explicabo alias.</p>'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet.</p>',
            'body'  => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, harum velit tenetur aperiam enim expedita quasi tempora blanditiis, neque, perspiciatis hic inventore praesentium incidunt quibusdam officia corrupti asperiores aliquam modi doloremque dolore odit id accusantium. Quaerat dolor expedita quo blanditiis veritatis sequi. Tempore consectetur temporibus nihil aspernatur? Cumque nesciunt neque nemo error tempora quam veniam possimus suscipit illo quis ipsam dolores dolorem in consequuntur placeat, totam at, cupiditate, vitae nostrum eos? Voluptates deserunt tenetur aperiam unde accusantium, cupiditate illum placeat! Excepturi voluptatem voluptate laborum. Pariatur optio perferendis sint animi, deserunt numquam nihil ipsa officia, soluta ullam eos necessitatibus accusantium autem obcaecati eum facere sed? Corporis quibusdam reiciendis distinctio sequi reprehenderit temporibus facilis voluptas ipsam ratione commodi, molestiae, impedit cumque eaque hic atque, tempora ex voluptatum ut accusamus veniam ullam. Ducimus commodi itaque voluptatum mollitia tenetur, libero natus enim laudantium perspiciatis minus porro cum eum aspernatur! Aut similique quisquam quidem esse praesentium? Eius tempore ipsam error eos, eaque rem optio earum harum. Consectetur molestias, recusandae a dicta amet reiciendis sit soluta beatae, doloribus quod numquam, dolore exercitationem obcaecati voluptas itaque? Doloribus sequi laboriosam maiores error voluptatem tenetur rerum. Iusto cumque officia repellendus, illum ipsum nulla voluptate deleniti modi quidem explicabo alias.</p>'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet.</p>',
            'body'  => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, harum velit tenetur aperiam enim expedita quasi tempora blanditiis, neque, perspiciatis hic inventore praesentium incidunt quibusdam officia corrupti asperiores aliquam modi doloremque dolore odit id accusantium. Quaerat dolor expedita quo blanditiis veritatis sequi. Tempore consectetur temporibus nihil aspernatur? Cumque nesciunt neque nemo error tempora quam veniam possimus suscipit illo quis ipsam dolores dolorem in consequuntur placeat, totam at, cupiditate, vitae nostrum eos? Voluptates deserunt tenetur aperiam unde accusantium, cupiditate illum placeat! Excepturi voluptatem voluptate laborum. Pariatur optio perferendis sint animi, deserunt numquam nihil ipsa officia, soluta ullam eos necessitatibus accusantium autem obcaecati eum facere sed? Corporis quibusdam reiciendis distinctio sequi reprehenderit temporibus facilis voluptas ipsam ratione commodi, molestiae, impedit cumque eaque hic atque, tempora ex voluptatum ut accusamus veniam ullam. Ducimus commodi itaque voluptatum mollitia tenetur, libero natus enim laudantium perspiciatis minus porro cum eum aspernatur! Aut similique quisquam quidem esse praesentium? Eius tempore ipsam error eos, eaque rem optio earum harum. Consectetur molestias, recusandae a dicta amet reiciendis sit soluta beatae, doloribus quod numquam, dolore exercitationem obcaecati voluptas itaque? Doloribus sequi laboriosam maiores error voluptatem tenetur rerum. Iusto cumque officia repellendus, illum ipsum nulla voluptate deleniti modi quidem explicabo alias.</p>'
        ]); */
    }
}
