<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $student_id_1 = Str::uuid()->toString();
        $book_id_1 = Str::uuid()->toString();

        $user_id_1 = Str::uuid()->toString();
        $user_id_2 = Str::uuid()->toString();

        DB::table('students')->insert([
            'id' => $student_id_1,
            'name' => 'Zidan',
            'gender' => 'Laki - Laki',
            'nik' =>  '21041413141',
            'nisn' =>  '21041413141',
            'date_of_birth' =>  date('Y-m-d H:i:s'),
            'religion' => 'Islam',
            'address' => 'JL. Simpang Wisnuwardana III No.6',
        ]);

        \App\Models\User::factory()->create([
            'id' => $user_id_1,
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' =>  Hash::make('Admin'),
            'role' => 'Admin'
        ]);

        \App\Models\User::factory()->create([
            'id' => $user_id_2,
            'username' => 'Zidan',
            'email' => 'zidan@gmail.com',
            'password' =>  Hash::make('Zidan'),
            'role' => 'Student',
            'student_id' => $student_id_1
        ]);

        DB::table('books')->insert([
            'id' => $book_id_1,
            'name' => 'Buku Kemation',
            'category' => 'Comic',
            'publisher' =>  'Zidan',
            'publication_year' =>  date('Y-m-d H:i:s'),
            'stock' => 100,
        ]);

        DB::table('rents')->insert([
            'id' => Str::uuid()->toString(),
            'student_id' => $student_id_1,
            'book_id' => $book_id_1,
            'status' =>  'Pengajuan',
        ]);
        
    }
}
