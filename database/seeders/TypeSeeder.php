<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {




        Type::truncate();


        $types = ['Frontend', 'Backend', 'AI', 'Data Analytics', 'Fullstack'];

        foreach($types as $type){

            $nex_type = new Type();

            $new_type->title = $type;

            $new_type->save();
        }
    }
}