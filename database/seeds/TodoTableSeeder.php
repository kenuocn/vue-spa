<?php

use Illuminate\Database\Seeder;

use App\Models\Todo;
class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);



        // 生成数据集合
        $todos = factory(Todo::class)
            ->times(100)
            ->make();


        // 插入到数据库中
        Todo::insert($todos->toArray());
    }
}
