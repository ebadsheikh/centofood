<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = $this->prepareData();

        foreach ($languages as $language) {
            Language::create([
                'name' => $language['name'],
                'code' => $language['code'],
            ]);
        }
    }

    /**
     * Prepare data for languages table.
     *
     * @return array
     */
    public function prepareData(): array
    {
        return [
            ['name' => 'English', 'code' => 'en'],
            ['name' => 'Arabic', 'code' => 'ar'],
            // Add more languages as needed
        ];
    }
}
