<?php

use Illuminate\Database\Seeder;
use Faker\Provider\zh_TW\DateTime;

class problemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('m_problem')->delete();
        \DB::table('m_problem')->insert([
            'problemId' => '28_1',
            'problemUpdateTime' => new \DateTime(),
            'problemCategory' => '情報セキュリティ総論',
            'problemTitle' => '情報セキュリティの要素の一つである「真正性」の具体例として、ユーザとその動作が一意に特定でき、過去にさかのぼっても追跡できるように、情報システムのアクセスログを取得することなど* が挙げられる。',
            'selectItem1' => '',
            'selectItem2' => '',
            'selectItem3' => '',
            'selectItem4' => '',
            'selectItem5' => '',
            'selectItem6' => '',
            'memo' => '',
            'yesNoProblemFlag' => true,
            'explainId' => 0,
        ]);
    }
}
