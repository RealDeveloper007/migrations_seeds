<?php

use Illuminate\Database\Seeder;
use App\DummyTable;
use Carbon\Carbon as Carbon;

class DummyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        //DummyTable::truncate();

        DummyTable::create([
                'first_column'      => 'test',
                'second_column'     => 1,
                'third_column'      => 10.09,
                'email'             => 'test@gmail.com',
                'email_verified_at' => Carbon::now(),
                'phone_no'          => 999999999,
                'address'           => 'My Address Details',
                'due_date'          => date('Y-m-d'),
                'status'            => '1',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
        ]);


    }
}
