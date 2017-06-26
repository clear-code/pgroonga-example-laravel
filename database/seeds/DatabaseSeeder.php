<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $category1 = new App\Category;
      $category1->name = '日記';
      $category1->save();

      $category2 = new App\Category;
      $category2->name = '報告';
      $category2->save();

      $products = ['Groonga', 'Mroonga', 'PGroonga', 'Rroonga', 'Nroonga', 'Pyroonga'];
      $topics = ['高速な全文検索', '使い勝手の良さ', '開発のオープンさ', '肉リリースの面白さ'];
      for ($i = 1; $i <= 100 ;$i++) {
        $post = new App\Post;
        $post->title = "{$i}番目の記事";
        $product_i = array_rand($products);
        $product = $products[$product_i]
        $topic_i = array_rand($topics);
        $topic = $topics[$topic_i]
        $post->body = "今日は{$product}の{$topic}について語ります。";
        $post->category_id = ($i % 2) + 1;
        $post->save();
      }
    }
}
