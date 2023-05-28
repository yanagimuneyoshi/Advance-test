<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $this->command->info("addressesの作成を開始します...");

    $memberSplFileObject = new \SplFileObject(__DIR__ . '/x-ken-all.csv');
    $memberSplFileObject->setFlags(
      \SplFileObject::READ_CSV |
        \SplFileObject::READ_AHEAD |
        \SplFileObject::SKIP_EMPTY |
        \SplFileObject::DROP_NEW_LINE
    );

    foreach ($memberSplFileObject as $key => $row) {
      //excelでcsvを保存するとBOM付きになるので削除する
      if ($key === 0) {
        $row[0] = preg_replace('/^\xEF\xBB\xBF/', '', $row[0]);
      }

      DB::table('contacts')->insert([
        'fullname' => (int) trim($row[0]),
        'gender' => trim($row[1]),
        'email' => trim($row[2]),
        'postcode' => trim($row[3]),
        'address' => trim($row[4]),
        'building_name' => trim($row[5]),
        'opinion' => trim($row[6]),
      ]);
    }
    $this->command->info("を作成しました。");
  }
}
