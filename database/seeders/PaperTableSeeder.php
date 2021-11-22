<?php

namespace Database\Seeders;

use App\Models\Paper;
use Illuminate\Database\Seeder;

class PaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paper::create(['title' => 'オペレーティング教育のためのファイルシステムの実装']);
        Paper::create(['title' => '学内バス運行管理システムの開発と評価']);
        Paper::create(['title' => '学習用オペレーティングシステムの作成']);
        Paper::create(['title' => 'モバイルFelica IDを使った販促システムの提案']);
        Paper::create(['title' => 'SNSのコミュニケーションを改善するためのアプリケーションの提案と評価']);
        Paper::create(['title' => '仮想記憶媒体を用いたICタグの低コスト運用法の提案']);
        Paper::create(['title' => 'Webリポジトリを効率的に利用するためのクラウドコンポーネントの研究']);
    }
}
