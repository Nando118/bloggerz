<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Category::factory(3)->create();
        Post::factory(20)->create();
        
        // User::create([
        //     'name' => 'Fernando Verdy Sunata',
        //     'email' => 'fernando@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        // User::create([
        //     'name' => 'Jenkis',
        //     'email' => 'jenkins@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        // Category::create([
        //     'name' => 'Programming',
        //     'slug' => 'programming',
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design',
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama Blog',
        //     'slug' => 'judul-pertama-blog',
        //     'author' => 'Fernando Verdy Sunata',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quas, delectus officiis maiores neque nobis veniam sequi, temporibus necessitatibus officia molestias debitis doloribus illum similique quidem sunt! Consequatur officia eum adipisci fuga quam asperiores, nihil eligendi, optio eos commodi, aperiam voluptate in velit saepe distinctio magnam delectus sapiente. Sint officiis doloribus at praesentium quod nobis.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero quo, nostrum aut tenetur magnam at exercitationem assumenda quisquam odit! Similique aspernatur rem rerum a, repudiandae dolorum totam mollitia tempore ea assumenda facere deserunt! Blanditiis obcaecati inventore eveniet earum maiores reprehenderit porro! Reprehenderit optio illo, eaque dolores ab qui, obcaecati eum, ea nobis eius illum quos laboriosam. Dolor ipsa fugiat doloremque? Fugiat architecto hic incidunt odio? Vel quia sint, vitae totam delectus iure optio voluptate placeat? Magnam perspiciatis ullam eum fugiat sequi sunt consequuntur tempora. Laborum ad aut sunt enim facere tempore eius molestiae a earum nostrum, ipsa officiis nesciunt deserunt voluptas magnam nihil labore cum corporis, quo cumque culpa dignissimos odio voluptates! Porro aperiam esse delectus incidunt odio, itaque commodi voluptates nulla omnis, ipsum cumque voluptatum libero quas quam eius voluptate nostrum facere iure quia natus aspernatur voluptatibus. Unde ab consequuntur incidunt, consectetur velit adipisci soluta amet voluptatibus enim eius.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, quibusdam modi possimus repudiandae culpa dolorem qui quis, tempora est non molestiae! Reprehenderit impedit commodi eveniet aspernatur inventore, id qui ipsa repudiandae? Aut voluptatem consequuntur aliquid harum voluptates ducimus. Sunt tempora iure placeat debitis, laudantium praesentium magni sed facere culpa doloremque fuga quidem nihil voluptatum? Ex nam alias amet nisi est unde deleniti saepe tenetur rem expedita quod corporis accusamus voluptate, neque adipisci tempore eius iure modi? Ipsam tenetur architecto dolor non incidunt, consectetur eos rerum optio ratione expedita doloremque minus quam. Adipisci possimus labore itaque et praesentium illum vero neque ullam, eaque quas vel provident consectetur commodi fuga quidem asperiores nam ex voluptate porro quaerat! Quos obcaecati ab laborum nobis magni facilis, aspernatur neque maiores adipisci, accusamus ex magnam. Dolores assumenda voluptate saepe aut repudiandae alias corrupti est at asperiores et laborum, mollitia incidunt doloremque commodi eius libero. Provident minus libero, assumenda labore aut repellat similique nesciunt in fugiat nihil, ab quos dolorum quod reiciendis corrupti id doloremque expedita nam commodi, officiis ut quo molestiae? Exercitationem eveniet molestiae iusto quas in. Veniam eum mollitia cupiditate recusandae, soluta nihil perferendis nulla reprehenderit commodi voluptas amet obcaecati maxime error. Asperiores, sed quam?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto facere minus expedita, ex quis ipsum odit corporis autem cupiditate adipisci rem explicabo quae esse? Architecto, esse facilis mollitia suscipit, fugiat excepturi, exercitationem aspernatur illo dolores incidunt non numquam eius ad ratione? Sunt dolorum, distinctio ad culpa ut fugit corporis libero blanditiis, atque eligendi neque recusandae voluptate sed. Fuga perspiciatis aspernatur molestiae, quia facilis a vel accusamus assumenda repudiandae. Autem doloribus praesentium deleniti voluptates quas illum ea maiores necessitatibus neque corporis aspernatur rerum distinctio, quae similique. Doloribus, sint tenetur. Amet laborum iusto reprehenderit repellat distinctio animi at recusandae perferendis iste sit neque atque optio aliquid, in impedit sunt totam fugit labore laboriosam quasi non obcaecati porro incidunt ullam. Aperiam placeat mollitia ex ea ratione tempore fuga suscipit laboriosam, doloribus, a impedit optio. Dolor rerum reiciendis, magni saepe debitis iure, impedit esse officiis accusantium voluptatum libero quos cumque expedita culpa incidunt. Sed sequi rerum soluta provident libero asperiores atque alias, quae delectus architecto ab vitae minus eum quia iure esse dolore natus laboriosam quam tempore nulla deleniti maxime cupiditate dolores! Assumenda, soluta enim nisi delectus eius fugit repellat aperiam, similique animi officiis molestiae nam alias rem nobis dicta sunt ipsum eaque provident ullam dolor laboriosam beatae voluptas laudantium tenetur! Consequuntur, inventore corporis?</p>',
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Kedua Blog',
        //     'slug' => 'judul-kedua-blog',
        //     'author' => 'Fernando Verdy Sunata',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quas, delectus officiis maiores neque nobis veniam sequi, temporibus necessitatibus officia molestias debitis doloribus illum similique quidem sunt! Consequatur officia eum adipisci fuga quam asperiores, nihil eligendi, optio eos commodi, aperiam voluptate in velit saepe distinctio magnam delectus sapiente. Sint officiis doloribus at praesentium quod nobis.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero quo, nostrum aut tenetur magnam at exercitationem assumenda quisquam odit! Similique aspernatur rem rerum a, repudiandae dolorum totam mollitia tempore ea assumenda facere deserunt! Blanditiis obcaecati inventore eveniet earum maiores reprehenderit porro! Reprehenderit optio illo, eaque dolores ab qui, obcaecati eum, ea nobis eius illum quos laboriosam. Dolor ipsa fugiat doloremque? Fugiat architecto hic incidunt odio? Vel quia sint, vitae totam delectus iure optio voluptate placeat? Magnam perspiciatis ullam eum fugiat sequi sunt consequuntur tempora. Laborum ad aut sunt enim facere tempore eius molestiae a earum nostrum, ipsa officiis nesciunt deserunt voluptas magnam nihil labore cum corporis, quo cumque culpa dignissimos odio voluptates! Porro aperiam esse delectus incidunt odio, itaque commodi voluptates nulla omnis, ipsum cumque voluptatum libero quas quam eius voluptate nostrum facere iure quia natus aspernatur voluptatibus. Unde ab consequuntur incidunt, consectetur velit adipisci soluta amet voluptatibus enim eius.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, quibusdam modi possimus repudiandae culpa dolorem qui quis, tempora est non molestiae! Reprehenderit impedit commodi eveniet aspernatur inventore, id qui ipsa repudiandae? Aut voluptatem consequuntur aliquid harum voluptates ducimus. Sunt tempora iure placeat debitis, laudantium praesentium magni sed facere culpa doloremque fuga quidem nihil voluptatum? Ex nam alias amet nisi est unde deleniti saepe tenetur rem expedita quod corporis accusamus voluptate, neque adipisci tempore eius iure modi? Ipsam tenetur architecto dolor non incidunt, consectetur eos rerum optio ratione expedita doloremque minus quam. Adipisci possimus labore itaque et praesentium illum vero neque ullam, eaque quas vel provident consectetur commodi fuga quidem asperiores nam ex voluptate porro quaerat! Quos obcaecati ab laborum nobis magni facilis, aspernatur neque maiores adipisci, accusamus ex magnam. Dolores assumenda voluptate saepe aut repudiandae alias corrupti est at asperiores et laborum, mollitia incidunt doloremque commodi eius libero. Provident minus libero, assumenda labore aut repellat similique nesciunt in fugiat nihil, ab quos dolorum quod reiciendis corrupti id doloremque expedita nam commodi, officiis ut quo molestiae? Exercitationem eveniet molestiae iusto quas in. Veniam eum mollitia cupiditate recusandae, soluta nihil perferendis nulla reprehenderit commodi voluptas amet obcaecati maxime error. Asperiores, sed quam?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto facere minus expedita, ex quis ipsum odit corporis autem cupiditate adipisci rem explicabo quae esse? Architecto, esse facilis mollitia suscipit, fugiat excepturi, exercitationem aspernatur illo dolores incidunt non numquam eius ad ratione? Sunt dolorum, distinctio ad culpa ut fugit corporis libero blanditiis, atque eligendi neque recusandae voluptate sed. Fuga perspiciatis aspernatur molestiae, quia facilis a vel accusamus assumenda repudiandae. Autem doloribus praesentium deleniti voluptates quas illum ea maiores necessitatibus neque corporis aspernatur rerum distinctio, quae similique. Doloribus, sint tenetur. Amet laborum iusto reprehenderit repellat distinctio animi at recusandae perferendis iste sit neque atque optio aliquid, in impedit sunt totam fugit labore laboriosam quasi non obcaecati porro incidunt ullam. Aperiam placeat mollitia ex ea ratione tempore fuga suscipit laboriosam, doloribus, a impedit optio. Dolor rerum reiciendis, magni saepe debitis iure, impedit esse officiis accusantium voluptatum libero quos cumque expedita culpa incidunt. Sed sequi rerum soluta provident libero asperiores atque alias, quae delectus architecto ab vitae minus eum quia iure esse dolore natus laboriosam quam tempore nulla deleniti maxime cupiditate dolores! Assumenda, soluta enim nisi delectus eius fugit repellat aperiam, similique animi officiis molestiae nam alias rem nobis dicta sunt ipsum eaque provident ullam dolor laboriosam beatae voluptas laudantium tenetur! Consequuntur, inventore corporis?</p>',
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Ketiga Blog',
        //     'slug' => 'judul-ketiga-blog',
        //     'author' => 'Fernando Verdy Sunata',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quas, delectus officiis maiores neque nobis veniam sequi, temporibus necessitatibus officia molestias debitis doloribus illum similique quidem sunt! Consequatur officia eum adipisci fuga quam asperiores, nihil eligendi, optio eos commodi, aperiam voluptate in velit saepe distinctio magnam delectus sapiente. Sint officiis doloribus at praesentium quod nobis.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero quo, nostrum aut tenetur magnam at exercitationem assumenda quisquam odit! Similique aspernatur rem rerum a, repudiandae dolorum totam mollitia tempore ea assumenda facere deserunt! Blanditiis obcaecati inventore eveniet earum maiores reprehenderit porro! Reprehenderit optio illo, eaque dolores ab qui, obcaecati eum, ea nobis eius illum quos laboriosam. Dolor ipsa fugiat doloremque? Fugiat architecto hic incidunt odio? Vel quia sint, vitae totam delectus iure optio voluptate placeat? Magnam perspiciatis ullam eum fugiat sequi sunt consequuntur tempora. Laborum ad aut sunt enim facere tempore eius molestiae a earum nostrum, ipsa officiis nesciunt deserunt voluptas magnam nihil labore cum corporis, quo cumque culpa dignissimos odio voluptates! Porro aperiam esse delectus incidunt odio, itaque commodi voluptates nulla omnis, ipsum cumque voluptatum libero quas quam eius voluptate nostrum facere iure quia natus aspernatur voluptatibus. Unde ab consequuntur incidunt, consectetur velit adipisci soluta amet voluptatibus enim eius.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, quibusdam modi possimus repudiandae culpa dolorem qui quis, tempora est non molestiae! Reprehenderit impedit commodi eveniet aspernatur inventore, id qui ipsa repudiandae? Aut voluptatem consequuntur aliquid harum voluptates ducimus. Sunt tempora iure placeat debitis, laudantium praesentium magni sed facere culpa doloremque fuga quidem nihil voluptatum? Ex nam alias amet nisi est unde deleniti saepe tenetur rem expedita quod corporis accusamus voluptate, neque adipisci tempore eius iure modi? Ipsam tenetur architecto dolor non incidunt, consectetur eos rerum optio ratione expedita doloremque minus quam. Adipisci possimus labore itaque et praesentium illum vero neque ullam, eaque quas vel provident consectetur commodi fuga quidem asperiores nam ex voluptate porro quaerat! Quos obcaecati ab laborum nobis magni facilis, aspernatur neque maiores adipisci, accusamus ex magnam. Dolores assumenda voluptate saepe aut repudiandae alias corrupti est at asperiores et laborum, mollitia incidunt doloremque commodi eius libero. Provident minus libero, assumenda labore aut repellat similique nesciunt in fugiat nihil, ab quos dolorum quod reiciendis corrupti id doloremque expedita nam commodi, officiis ut quo molestiae? Exercitationem eveniet molestiae iusto quas in. Veniam eum mollitia cupiditate recusandae, soluta nihil perferendis nulla reprehenderit commodi voluptas amet obcaecati maxime error. Asperiores, sed quam?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto facere minus expedita, ex quis ipsum odit corporis autem cupiditate adipisci rem explicabo quae esse? Architecto, esse facilis mollitia suscipit, fugiat excepturi, exercitationem aspernatur illo dolores incidunt non numquam eius ad ratione? Sunt dolorum, distinctio ad culpa ut fugit corporis libero blanditiis, atque eligendi neque recusandae voluptate sed. Fuga perspiciatis aspernatur molestiae, quia facilis a vel accusamus assumenda repudiandae. Autem doloribus praesentium deleniti voluptates quas illum ea maiores necessitatibus neque corporis aspernatur rerum distinctio, quae similique. Doloribus, sint tenetur. Amet laborum iusto reprehenderit repellat distinctio animi at recusandae perferendis iste sit neque atque optio aliquid, in impedit sunt totam fugit labore laboriosam quasi non obcaecati porro incidunt ullam. Aperiam placeat mollitia ex ea ratione tempore fuga suscipit laboriosam, doloribus, a impedit optio. Dolor rerum reiciendis, magni saepe debitis iure, impedit esse officiis accusantium voluptatum libero quos cumque expedita culpa incidunt. Sed sequi rerum soluta provident libero asperiores atque alias, quae delectus architecto ab vitae minus eum quia iure esse dolore natus laboriosam quam tempore nulla deleniti maxime cupiditate dolores! Assumenda, soluta enim nisi delectus eius fugit repellat aperiam, similique animi officiis molestiae nam alias rem nobis dicta sunt ipsum eaque provident ullam dolor laboriosam beatae voluptas laudantium tenetur! Consequuntur, inventore corporis?</p>',
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Judul Keempat Blog',
        //     'slug' => 'judul-keempat-blog',
        //     'author' => 'Jenkins',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quas, delectus officiis maiores neque nobis veniam sequi, temporibus necessitatibus officia molestias debitis doloribus illum similique quidem sunt! Consequatur officia eum adipisci fuga quam asperiores, nihil eligendi, optio eos commodi, aperiam voluptate in velit saepe distinctio magnam delectus sapiente. Sint officiis doloribus at praesentium quod nobis.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero quo, nostrum aut tenetur magnam at exercitationem assumenda quisquam odit! Similique aspernatur rem rerum a, repudiandae dolorum totam mollitia tempore ea assumenda facere deserunt! Blanditiis obcaecati inventore eveniet earum maiores reprehenderit porro! Reprehenderit optio illo, eaque dolores ab qui, obcaecati eum, ea nobis eius illum quos laboriosam. Dolor ipsa fugiat doloremque? Fugiat architecto hic incidunt odio? Vel quia sint, vitae totam delectus iure optio voluptate placeat? Magnam perspiciatis ullam eum fugiat sequi sunt consequuntur tempora. Laborum ad aut sunt enim facere tempore eius molestiae a earum nostrum, ipsa officiis nesciunt deserunt voluptas magnam nihil labore cum corporis, quo cumque culpa dignissimos odio voluptates! Porro aperiam esse delectus incidunt odio, itaque commodi voluptates nulla omnis, ipsum cumque voluptatum libero quas quam eius voluptate nostrum facere iure quia natus aspernatur voluptatibus. Unde ab consequuntur incidunt, consectetur velit adipisci soluta amet voluptatibus enim eius.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, quibusdam modi possimus repudiandae culpa dolorem qui quis, tempora est non molestiae! Reprehenderit impedit commodi eveniet aspernatur inventore, id qui ipsa repudiandae? Aut voluptatem consequuntur aliquid harum voluptates ducimus. Sunt tempora iure placeat debitis, laudantium praesentium magni sed facere culpa doloremque fuga quidem nihil voluptatum? Ex nam alias amet nisi est unde deleniti saepe tenetur rem expedita quod corporis accusamus voluptate, neque adipisci tempore eius iure modi? Ipsam tenetur architecto dolor non incidunt, consectetur eos rerum optio ratione expedita doloremque minus quam. Adipisci possimus labore itaque et praesentium illum vero neque ullam, eaque quas vel provident consectetur commodi fuga quidem asperiores nam ex voluptate porro quaerat! Quos obcaecati ab laborum nobis magni facilis, aspernatur neque maiores adipisci, accusamus ex magnam. Dolores assumenda voluptate saepe aut repudiandae alias corrupti est at asperiores et laborum, mollitia incidunt doloremque commodi eius libero. Provident minus libero, assumenda labore aut repellat similique nesciunt in fugiat nihil, ab quos dolorum quod reiciendis corrupti id doloremque expedita nam commodi, officiis ut quo molestiae? Exercitationem eveniet molestiae iusto quas in. Veniam eum mollitia cupiditate recusandae, soluta nihil perferendis nulla reprehenderit commodi voluptas amet obcaecati maxime error. Asperiores, sed quam?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto facere minus expedita, ex quis ipsum odit corporis autem cupiditate adipisci rem explicabo quae esse? Architecto, esse facilis mollitia suscipit, fugiat excepturi, exercitationem aspernatur illo dolores incidunt non numquam eius ad ratione? Sunt dolorum, distinctio ad culpa ut fugit corporis libero blanditiis, atque eligendi neque recusandae voluptate sed. Fuga perspiciatis aspernatur molestiae, quia facilis a vel accusamus assumenda repudiandae. Autem doloribus praesentium deleniti voluptates quas illum ea maiores necessitatibus neque corporis aspernatur rerum distinctio, quae similique. Doloribus, sint tenetur. Amet laborum iusto reprehenderit repellat distinctio animi at recusandae perferendis iste sit neque atque optio aliquid, in impedit sunt totam fugit labore laboriosam quasi non obcaecati porro incidunt ullam. Aperiam placeat mollitia ex ea ratione tempore fuga suscipit laboriosam, doloribus, a impedit optio. Dolor rerum reiciendis, magni saepe debitis iure, impedit esse officiis accusantium voluptatum libero quos cumque expedita culpa incidunt. Sed sequi rerum soluta provident libero asperiores atque alias, quae delectus architecto ab vitae minus eum quia iure esse dolore natus laboriosam quam tempore nulla deleniti maxime cupiditate dolores! Assumenda, soluta enim nisi delectus eius fugit repellat aperiam, similique animi officiis molestiae nam alias rem nobis dicta sunt ipsum eaque provident ullam dolor laboriosam beatae voluptas laudantium tenetur! Consequuntur, inventore corporis?</p>',
        // ]);
    }
}