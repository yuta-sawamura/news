<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'sei' => '澤村',
                'mei' => '勇太',
                'sei_kana' => 'サワムラ',
                'mei_kana' => 'ユウタ',
                'gender' => 1,
                'email' => 's22007@st.kic.ac.jp',
                'birth' => '1988-10-09',
                'password' => Hash::make('sawamura1234'),
                'created_at' => '2020-02-01 21:07:31',
                'updated_at' => '2020-02-01 21:07:31',
            ],
            [
                'id' => 2,
                'sei' => '桜木',
                'mei' => 'くるみ',
                'sei_kana' => 'サクラギ',
                'mei_kana' => 'クルミ',
                'gender' => 2,
                'email' => 's22007+1@st.kic.ac.jp',
                'birth' => '1988-10-09',
                'password' => Hash::make('sawamura1234'),
                'created_at' => '2020-02-01 21:07:31',
                'updated_at' => '2020-02-01 21:07:31',
            ],
            [
                'id' => 3,
                'sei' => '山田',
                'mei' => '道正',
                'sei_kana' => 'ヤマダ',
                'mei_kana' => 'ミチマサ',
                'gender' => 1,
                'email' => 's22007+2@st.kic.ac.jp',
                'birth' => '1988-10-09',
                'password' => Hash::make('sawamura1234'),
                'created_at' => '2020-02-01 21:07:31',
                'updated_at' => '2020-02-01 21:07:31',
            ],
        ]);
    }
}
