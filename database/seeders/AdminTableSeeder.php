<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            [
                'id'=>1,'name'=>'Johnny Depp','type'=>'admin','email'=>'superadmin@admin.online','password'=>'$2y$10$IK0Vz4QUjPIRszOIjfRvJO9PlbHB7kY6fRhJGFUIKNdxf.I3iW/ry'
            ],
            [
                'id'=>2,'name'=>'nerdy','type'=>'subadmin','email'=>'subadmin@admin.online','password'=>'$2y$10$qUkdvh4muiUoyuzL9gO3kuQcUet6A7uOpAdPXun.t7HqcQkykmVfC'
            ],
          ];

          DB::table('admins')->insert($adminRecords);
    }
}
