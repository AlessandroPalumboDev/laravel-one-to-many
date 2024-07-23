<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Facades\Schema;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // Disabilito vincolo
        Schema::disableForeignKeyConstraints();

        // Svuoto la tabella
        Type::truncate();


        $types = ['Frontend', 'Backend', 'AI', 'Data Analytics', 'Fullstack'];

        //Riempio e salvo la tabella
        foreach($types as $type){

            $new_type = new Type();

            $new_type->title = $type;

            $new_type->save();
        }

        // Riabilito vincolo
        Schema::enableForeignKeyConstraints();
    }
}
