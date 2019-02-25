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
            'problemId' => '28-1-1-1',
            'problemUpdateTime' => new \DateTime(),
            'problemCategory' => '情報セキュリティ総論',
            'problemTitle' => '情報セキュリティの要素の一つである「真正性」の具体例として、ユーザとその動作が一意に特定でき、過去にさかのぼっても追跡できるように、情報システムのアクセスログを取得することなど* が挙げられる。',
            'selectItem1' => '',
            'selectItem2' => '',
            'selectItem3' => '',
            'selectItem4' => '',
            'selectItem5' => '',
            'selectItem6' => '',
            'answer' => '✖',
            'memo' => '',
            'yesNoProblemFlag' => true,
            'explainId' => 0,
        ]);
        \DB::table('m_problem')->insert([
            'problemId' => '28-1-1-2',
            'problemUpdateTime' => new \DateTime(),
            'problemCategory' => '情報セキュリティ総論',
            'problemTitle' => 'OECDプライバシー・ガイドラインの8原則において、「データ内容の原則」では、収集するデータは、利用目的に沿ったもので、かつ正確・完全・最新であるべきであるとしている。',
            'selectItem1' => '',
            'selectItem2' => '',
            'selectItem3' => '',
            'selectItem4' => '',
            'selectItem5' => '',
            'selectItem6' => '',
            'answer' => '◯',
            'memo' => '',
            'yesNoProblemFlag' => true,
            'explainId' => 0,
        ]);
        \DB::table('m_problem')->insert([
            'problemId' => '28-1-2-1',
            'problemUpdateTime' => new \DateTime(),
            'problemCategory' => '情報セキュリティ総論',
            'problemTitle' => 'JIS Q31000:2010において、「リスク」を、目的に対する不確かさの(a)と定義している。
また、リスクは、ある事象(周辺状況の変化を含む)の結果とその発生の(b)との組合せと して表現されることが多いとしている。 なお、ここでの「(a)」とは、期待されていることから、好ましい方向に離、または好ましく ない方向に乖離することをいう。そして、「不確かさ」とは、事象、その結果またはその(b)に 関する、情報、理解もしくは知識が、(c)状態をいう。
',
            'selectItem1' => 'ア:(a) 結果 (b)起こりやすさ (c)一定の水準を充たしている',
            'selectItem2' => 'イ:(a) 結果 (b)起こりにくさ (c)たとえ部分的にでも欠落している',
            'selectItem3' => 'ウ:(a) 影響 (b)起こりやすさ (c)たとえ部分的にでも欠落している',
            'selectItem4' => 'エ:(a) 影響 (b)起こりにくさ (c)一定の水準を充たしている。',
            'selectItem5' => '',
            'selectItem6' => '',
            'answer' => 'ウ',
            'memo' => '',
            'yesNoProblemFlag' => false,
            'explainId' => 0,
        ]);
        \DB::table('m_problem')->insert([
            'problemId' => '28-1-2-2',
            'problemUpdateTime' => new \DateTime(),
            'problemCategory' => '情報セキュリティ総論',
            'problemTitle' => 'JIS Q 0073:2010において、リスク対応の一つである「リスク共有」を、他者との間で、合意に基づ いてリスクを(a )することを含むリスク対応の形態と定義している。なお、「リスク共有」 は、(b)ことがあり、「(c)」は、「リスク共有」の一つの形態であるとしている。 また、リスク(a)の度合いは、共有に関する取決めの信頼性及び明りょう性によって決まること があるとしている。',
            'selectItem1' => 'ア: (a)分散 (b)外部環境によって影響を受ける (c)リスク選好 ',
            'selectItem2' => 'イ: (a)分散 (b)保険または他の契約形態によって実行される (c)リスク移転',
            'selectItem3' => 'ウ: (a)集約 (b)外部環境によって影響を受ける (c)リスク移転',
            'selectItem4' => 'エ: (a)集約 (b)保険または他の契約形態によって実行される (c)リスク選好',
            'selectItem5' => '',
            'selectItem6' => '',
            'answer' => 'イ',
            'memo' => '',
            'yesNoProblemFlag' => false,
            'explainId' => 0,
        ]);
    }
}
