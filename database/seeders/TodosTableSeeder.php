<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
          'task_name' => 'Aをする'
      ];
      Todo::create($param);
      $param = [
          'task_name' => 'Bをする'
      ];
      Todo::create($param);
      $param = [
          'task_name' => 'Cに行く'
      ];
      Todo::create($param);
      $param = [
          'task_name' => 'Dを食べる'
      ];
      Author::create($param);
    }
}
