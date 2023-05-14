<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory(5)->create();
        // DB::table('students')->insert([
        //     [
        //         'name' => 'Anton',
        //         'nim' => '252342432',
        //         'major' => 'Information System'
        //     ],
        //     [
        //         'name' => 'Siti',
        //         'nim' => '252342432',
        //         'major' => 'Information System'
        //     ],
        //     [
        //         'name' => 'Suroso',
        //         'nim' => '252342432',
        //         'major' => 'Computer Engineering'
        //     ],
        //     [
        //         'name' => 'Denis',
        //         'nim' => '252342432',
        //         'major' => 'Computer Engineering'
        //     ],
        //     [
        //         'name' => 'Geren',
        //         'nim' => '252342432',
        //         'major' => 'Computer Science'
        //     ],

            
        // ]);
    }
}
