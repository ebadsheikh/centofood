<?php

namespace Database\Seeders;

use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\PaymentStatus;
use App\Models\User;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::pluck('id');
        $paymentMethods = PaymentMethod::pluck('id');
        $paymentStatuses = PaymentStatus::pluck('id');

        for ($i = 1; $i <= 10; $i++) {
            $paymentData = [
                'user_id' => $users->random(),
                'payment_method_id' => $paymentMethods->random(),
                'payment_status_id' => $paymentStatuses->random(),
                'price' => rand(10, 100),
                'description' => 'Payment for order #' . $i,
            ];

            Payment::firstOrCreate($paymentData);
        }
    }
}
