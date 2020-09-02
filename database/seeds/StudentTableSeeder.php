<?php

use Illuminate\Database\Seeder;
use App\Student;//use student table

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $s1=new Student();
        // $s2=new Student();
        // $s3=new Student();
        // //mg mg
        // $s1->name = "Mg Mg";
        // $s1->email = "mgmg@gmail.com";
        // $s1->address = "Bahan";
        // $s1->save();

        // //su su
        // $s2->name = "Su Su";
        // $s2->email = "susu@gmail.com";
        // $s2->address = "Latha";
        // $s2->save();

        // $s3->name = "Mya Mya";
        // $s3->email = "myamya@gmail.com";
        // $s3->address = "Latha";
        // $s3->save();
        factory(App\Student::class,10)->create();
    }
}
