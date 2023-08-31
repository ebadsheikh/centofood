<?php

namespace Database\Seeders;

use App\Models\PrivacyPolicy;
use App\Models\PrivacyPolicyTranslation;
use Illuminate\Database\Seeder;

class PrivacyPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        foreach ($this->prepareData() as $privacyPolicyData) {
            // create privacyPolicy
            $privacyPolicy = PrivacyPolicy::firstOrCreate([
                'slug' => $privacyPolicyData['slug'],
            ]);

            // create privacyPolicy locales
            foreach ($privacyPolicyData['locales'] as $localeData) {
                PrivacyPolicyTranslation::firstOrCreate([
                    'privacy_policy_id' => $privacyPolicy->id,
                    'locale' => $localeData['locale'],
                    'description' => $localeData['description'],
                ]);
            }
        }
    }

    /**
     * Prepare data for privacyPolicy & privacyPolicy_locales table
     * in multi-language
     *
     * @return array
     */
    public function prepareData(): array
    {
        return [
            [
                'slug' => 'policy',
                'locales' => [
                    ['locale' => 'en', 'description' => 'This Privacy Policy only applies to personal information collected through our Services and does not apply to information collected at any other website, application or otherwise by us (unless specifically stated), including when you call us, write to us, or communicate with us in any manner other than through our Services. By using our Services, you consent to our use of your personal information and agree to the terms of this Privacy Policy.'],
                    ['locale' => 'ar', 'description' => 'هذه سياسة الخصوصية تنطبق فقط على المعلومات الشخصية التي يتم جمعها من خلال خدماتنا ولا تنطبق على المعلومات التي يتم جمعها من أي موقع آخر، تطبيق أو غيره من قبلنا (ما لم ينص صراحة على العكس)، بما في ذلك عندما تتصل بنا أو تكتب إلينا أو تتواصل معنا بأي طريقة أخرى غير خدماتنا. عن طريق استخدام خدماتنا، فإنك توافق على استخدامنا لمعلوماتك الشخصية وتوافق على شروط هذه سياسة الخصوصية'],
                ],
            ],
            // add more privacyPolicy as needed
        ];
    }
}
