<?php

use Illuminate\Database\Seeder;

class ClassifiedSectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classified_sections')->insert([
            'section' => "For Sale",
            'description' => "Items being sold",
        ]);

        DB::table('classified_sections')->insert([
            'section' => "Want To Buy",
            'description' => "Items being purchased",
        ]);

        DB::table('classified_sections')->insert([
            'section' => "Free",
            'description' => "Free things",
        ]);
    }
}
