<?php

namespace App\Models;

class Post
{
    // Data Blog
    private static $blog_posts = [
        [
            'title' => 'Danish-Swedish Farmdog',
            'slug' => 'danish-swedish-farmdog',
            'author' => 'Aditya Watsica',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, veritatis neque. Ipsum unde sit debitis, natus blanditiis labore ducimus! Totam hic soluta amet aspernatur quas!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci impedit tempora illum placeat. Vero nihil laboriosam reiciendis, explicabo tempora sint in ea quae aperiam atque sit culpa nam, error deleniti similique officiis animi ullam recusandae accusamus, porro iusto non natus odit nesciunt? Ex a, consectetur iste tenetur quam, dolores dolorum dolore praesentium quia maiores vero soluta consequatur? Minima blanditiis architecto quam cumque, at veniam quis atque numquam asperiores maxime, dolor quod quidem tempora culpa enim magnam quae, expedita eveniet reprehenderit eligendi sunt fuga exercitationem excepturi natus. Hic, magni nobis nulla totam ducimus sequi dicta aliquam. Corrupti molestias cupiditate ullam! Tempore.',
        ],
        [
            'title' => 'Minskin',
            'slug' => 'minskin',
            'author' => 'Amparo Blick',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quidem asperiores numquam sed inventore, amet incidunt consequuntur hic porro consequatur velit eligendi est delectus omnis?',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab magnam ducimus voluptatem. Nemo, modi beatae! Ipsa, eligendi accusamus laboriosam corrupti expedita quo ratione aut earum ex aliquid, in iste. Nesciunt, quis quidem? Exercitationem veniam voluptatum necessitatibus ad minima doloribus, quisquam asperiores obcaecati labore eaque dignissimos ea illo perspiciatis ullam laborum neque corporis blanditiis numquam. Perferendis nesciunt quisquam non ratione dolorum assumenda iure soluta alias itaque porro, consequatur optio similique quo ullam? Ipsa voluptas nobis accusamus consequuntur laudantium. Laudantium veniam sapiente tenetur fugiat corporis assumenda totam, laboriosam inventore? Consectetur inventore sed accusantium rerum amet accusamus animi assumenda optio, velit asperiores incidunt quis qui dolore quibusdam pariatur doloribus mollitia. Quas quam minus aperiam voluptatum, possimus iure harum omnis officia veniam libero alias enim, esse ratione dolore dignissimos at ex praesentium minima consequuntur. Vero corporis accusantium molestias ea minima ratione, magni rerum dolor quidem. Neque nihil magni non corporis cum, architecto minus maxime pariatur alias sit! Quisquam, provident.',
        ],
        [
            'title' => 'British Shorthair',
            'slug' => 'british-shorthair',
            'author' => 'Jaden Hand',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quidem asperiores numquam sed inventore, amet incidunt consequuntur hic porro consequatur velit eligendi est delectus omnis?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid dolores unde aliquam inventore nihil odit soluta neque voluptatem quisquam, exercitationem, placeat iusto ipsum rerum? Nobis vitae voluptate laboriosam corrupti, suscipit impedit! Sequi atque facere asperiores soluta commodi laudantium assumenda, expedita voluptatibus rem explicabo hic nam ea quaerat harum exercitationem rerum, reiciendis, dicta animi ratione. Nemo ab quibusdam, commodi facilis placeat neque distinctio corrupti ullam adipisci ducimus accusamus qui sequi ut eligendi quam fugit suscipit explicabo ratione tenetur aspernatur? Fuga numquam quaerat rerum ad magni cum expedita debitis reprehenderit maxime. Voluptas maiores perspiciatis vitae sapiente obcaecati sit optio ea dolores dolor, quis eaque beatae expedita quibusdam odit ut nobis provident, aliquid ipsa commodi nisi vero! Aut quibusdam eius perferendis, laudantium pariatur doloribus magnam repellendus unde dicta, voluptas est earum commodi, possimus facilis nobis iure at magni voluptates error temporibus sunt! Magnam tenetur perspiciatis adipisci harum velit, similique natus, illo quas quibusdam qui, laborum quia assumenda accusantium nam ipsum minus vitae fugiat expedita! Repellat pariatur, illum doloribus, ea assumenda dolore culpa aperiam a recusandae eaque, ab nemo officiis veniam eligendi!',
        ],
        [
            'title' => 'Snowshoe',
            'slug' => 'snowshoe',
            'author' => 'Jaden Hand',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quidem asperiores numquam sed inventore, amet incidunt consequuntur hic porro consequatur velit eligendi est delectus omnis?',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus excepturi laborum minima eos, architecto debitis a optio consectetur iure ullam tempora cum, reiciendis alias.</p><p><strong>Lorem</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit recusandae, sapiente placeat deleniti tenetur dicta porro maiores aut quae, itaque odio inventore cum nostrum maxime, vero voluptatem ullam quidem similique. Eum.</strong></p>',
        ],
        [
            'title' => 'Egyptian Mau',
            'slug' => 'egyptian-mau',
            'author' => 'Calista Huel',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quidem asperiores numquam sed inventore, amet incidunt consequuntur hic porro consequatur velit eligendi est delectus omnis?',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus excepturi laborum minima eos, architecto debitis a optio consectetur iure ullam tempora cum, reiciendis alias.</p><p><strong>Lorem</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit recusandae, sapiente placeat deleniti tenetur dicta porro maiores aut quae, itaque odio inventore cum nostrum maxime, vero voluptatem ullam quidem similique. Eum.</strong></p>',
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = self::all();

        return $posts->firstWhere('slug', $slug);
    }
}
