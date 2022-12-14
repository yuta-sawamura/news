<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'id' => 1,
                'title' => '【個別相談会】神戸情報大学院大学',
                'content' => '**「Social Innovation by ICT and yourself」**を学是として掲げる神戸情報大学院大学（KIC）。

![](https://coubic-images.s3.amazonaws.com/resources/516786/p1280x1280_9b0c5dde.png)

教員には国際協力機構（JICA）、開発コンサルタント企業出身者もいて、リアリティある授業が特徴だ。
ICT経験がない人への手厚いサポート、2022年10月から開始したフルオンライン履修制度など、魅力も多いKICのプログラムはどんなものだろうか。
キャリアアップの選択肢として、大学院進学を考えている方は参加必須！
神戸情報大学院大学のHPは[こちら](https://www.kic.ac.jp/)！
フォトギャラリーにて神戸情報大学院大学を取材した記事の閲覧が可能！

## 【プログラム内容】
* 10:00~10:30：説明会
* 10:30~10:50：個別相談（~11:50まで、各２名限定）
* 11:00~11:25
* 11:25~11:50
* 13:00~13:50：説明会
* 14:00~14:25：個別相談（~15:50まで、各２名限定）
* 14:25~14:50
* 15:00~15:25
* 15:25~15:50
* 16:00~16:30：説明会
* 16:30~16:50：個別相談（~17:50まで、各２名限定）
* 17:00~17:25
* 17:25~17:50',
                'created_at' => '2022-09-05 21:07:31',
                'updated_at' => '2022-09-05 21:07:31'
            ],
            [
                'id' => 2,
                'title' => '在京都フランス共和国総領事館のジュール・イルマン総領事ご来学',
                'content' => '## 2022年11月24日
在京都フランス共和国総領事館の**ジュール・イルマン総領事**が神戸情報大学院大学(KIC)にご来学されました。

![](https://www.kic.ac.jp/wp-content/uploads/2022/11/IMG_7883-768x512.jpg)

本学に在籍するアフリカからの留学生には、特に西アフリカ諸国出身のフランス語を話すフランコフォニー(フランス語話者の人々で構成される言語共同体を指す概念)が少なくありません。
今回、「アンスティチュ・フランセ関西」の館長も兼務されているイルマン総領事は本学の取り組みをはじめとして、受け入れている多くのフランコフォニーの留学生に関心をお寄せいただき、ご来学いただきました。

本学の取り組みついてご説明した後、同席していたコートジボワール出身で自身もフランコフォニーである2年生のボリ・フェリックス・ジョロム・サウリさんが研究テーマについてフランス語でプレゼンテーションを行いました。

![](https://www.kic.ac.jp/wp-content/uploads/2022/11/IMG_7892-768x512.jpg)

イルマン総領事は**非常に関心**を持ってプレゼンテーションを聞いておられ、日仏交流、フランコフォニーの一環としても本学との協力関係を築いていきたいと述べられました。
神戸情報大学院大学は、今後も、アフリカ諸国をはじめとしたフランコフォニーの留学生の受け入れとサポートを行っていきます。',
                'created_at' => '2022-09-05 21:07:31',
                'updated_at' => '2022-09-05 21:07:31'
            ],
        ]);
    }
}
