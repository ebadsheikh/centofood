<?php

namespace Database\Seeders;

use App\Models\DistanceUnitTranslation;
use Illuminate\Database\Seeder;

class DistanceUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        foreach ($this->prepareData() as $distanceUnitData) {
            // create discount_type
            $distance_unit = \App\Models\DistanceUnit::firstOrCreate([
                'slug' => $distanceUnitData['slug'],
            ]);

            // create discount_type locales
            foreach ($distanceUnitData['locales'] as $localeData) {
                DistanceUnitTranslation::firstOrCreate([
                    'distance_unit_id' => $distance_unit->id,
                    'locale' => $localeData['locale'],
                    'name' => $localeData['name'],
                ]);
            }
        }
    }

    /**
     * Prepare data for discount_type & discount_type_locales table
     * in multi-language
     *
     * @return array
     */
    public function prepareData(): array
    {
        return [
            [
                'slug' => 'meter',
                'locales' => [
                    ['locale' => 'en', 'name' => 'Meter'],
                    ['locale' => 'ar', 'name' => 'متر'],
                ],
            ],
            [
                'slug' => 'kilometer',
                'locales' => [
                    ['locale' => 'en', 'name' => 'Kilometer'],
                    ['locale' => 'ar', 'name' => 'كيلومتر'],
                ],
            ],
            [
                'slug' => 'mile',
                'locales' => [
                    ['locale' => 'en', 'name' => 'Mile'],
                    ['locale' => 'ar', 'name' => 'ميل'],
                ],
            ],
            // Add more distance units as needed
        ];
    }
}
