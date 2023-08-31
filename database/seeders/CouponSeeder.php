<?php

namespace Database\Seeders;

use App\Helpers\FactoryHelper;
use App\Models\Coupon;
use App\Models\DiscountType;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {  // Get all Extra Group ids from the database
        $discountTypeIds = DiscountType::pluck('id')->toArray();

        for ($i = 0; $i < fake()->numberBetween(1, 5); $i++) {
            $discountTypeId = $discountTypeIds[array_rand($discountTypeIds)];

            $couponData = $this->prepareData($discountTypeId);

            /**
             * First, create or retrieve an existing Extra based on the slug,
             * food_id and extra_group_id
             */
            $coupon = Coupon::firstOrCreate($couponData);
        }
    }

    /**
     * This function generates data needed to create a new Extra.
     * @param int $discountTypeId The ID of the ExtraGroup to which the new Extra belongs.
     * @return array An array of data to create the new Extra.
     */
    public function prepareData(int $discountTypeId): array
    {
        $faker = Factory::create();
        // Return an array of data to create the new Extra
        return [
            'slug' => fake()->slug(),
            'code' => fake()->unique()->numberBetween(0, 50),
            'discount' => fake()->numberBetween(0, 50),
            'discount_type_id' => $discountTypeId,
            'expiry_date' => $faker->dateTimeThisMonth(),
            'description' => FactoryHelper::times(5)->catchPhrase(),
            'enabled' => fake()->boolean,
        ];
    }
}
