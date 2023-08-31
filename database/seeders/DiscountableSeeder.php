<?php

namespace Database\Seeders;

use App\Models\Coupon;
use App\Models\Discountable;
use App\Models\Food;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class DiscountableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all coupons
        $coupons = Coupon::all();

        // Define the discountable models and their corresponding types
        $discountableModels = [
            Food::class,
            Restaurant::class,
            // Add more discountable models if needed
        ];

        // Loop through each discountable model
        foreach ($discountableModels as $discountableModel) {
            // Get all instances of the discountable model
            $discountables = $discountableModel::all();

            // Loop through each discountable instance
            foreach ($discountables as $discountable) {
                // Get a random coupon
                $coupon = $coupons->random();

                // Create a discountable entry with the coupon id, discountable type, and discountable id
                Discountable::create([
                    'coupon_id' => $coupon->id,
                    'discountable_type' => $discountableModel,
                    'discountable_id' => $discountable->id,
                ]);
            }
        }
    }
}
