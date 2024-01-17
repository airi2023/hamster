<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        for ($i=1; $i <= 6; $i++) { 
            $article = new Article();
            $article->title="記事タイトル".$i;
            $article->updated_at = date('Y-m-d');
            $article->subtitle="1890円(税込)";
            $article->body="生後" . $i % 3 + 2 . "ヶ月。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。";
            $article->item_img="slide" . $i % 4 + 1 . ".jpg";
            $article->save();
        }

        
        $param = [
            'title' => 'ロボロフスキー(♀)',
            'updated_at' => date('Y-m-d'),
            'subtitle' => '1890円(税込)',
            'body' => '生後2ヶ月の女の子。のんびり屋で眠ることが大好きです。手の平の上でもお構いなしにお昼寝します。',
            'item_img' => 'slide4.jpg'
        ];
        DB::table('articles')->insert($param);


        $param = [
            'title' => 'ジャンガリアン(♀)',
            'updated_at' => date('Y-m-d'),
            'subtitle' => '1890円(税込)',
            'body' => '生後3ヶ月の女の子。元気いっぱいで活発な性格です。よくおもちゃで遊んでいます。最近のお気に入りはかじり木。',
            'item_img' => 'slide3.jpg'
        ];
        DB::table('articles')->insert($param);


        $param = [
            'title' => 'ジャンガリアン(♂)',
            'updated_at' => date('Y-m-d'),
            'subtitle' => '1890円(税込)',
            'body' => '生後3ヶ月の男の子。心優しい性格で、ちょっぴりおくびょうな子です。ものかげに隠れて、こっそりこちらを見ている姿が可愛らしいです。',
            'item_img' => 'slide2.jpg'
        ];
        DB::table('articles')->insert($param);


        $param = [
            'title' => 'ゴールデン(♀)',
            'updated_at' => date('Y-m-d'),
            'subtitle' => '1890円(税込)',
            'body' => '生後3ヶ月の女の子。穏やかで人懐っこい性格です。食べることが大好きで、もりもりごはんを食べます。',
            'item_img' => 'slide1.jpg'
        ];
        DB::table('articles')->insert($param);




    }
}
