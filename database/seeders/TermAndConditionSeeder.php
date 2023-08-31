<?php

namespace Database\Seeders;

use App\Models\TermAndCondition;
use App\Models\TermAndConditionTranslation;
use Illuminate\Database\Seeder;

class TermAndConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->prepareData() as $termAndConditionData) {
            // create privacyPolicy
            $termAndCondition = TermAndCondition::firstOrCreate([
                'slug' => $termAndConditionData['slug'],
            ]);

            // create privacyPolicy locales
            foreach ($termAndConditionData['locales'] as $localeData) {
                TermAndConditionTranslation::firstOrCreate([
                    'term_and_condition_id' => $termAndCondition->id,
                    'locale' => $localeData['locale'],
                    'description' => $localeData['description'],
                ]);
            }
        }
    }

    /**
     * Prepare data for termAndCondition & termAndCondition_locales table
     * in multi-language
     *
     * @return array
     */
    public function prepareData(): array
    {
        return [
            [
                'slug' => 'terms',
                'locales' => [
                    ['locale' => 'en', 'description' => 'By placing an order with us, you agree to our terms and conditions. We reserve the right to refuse service to anyone.All prices are subject to change without notice.We are not responsible for lost or stolen items.We reserve the right to make changes to our menu without notice.We do not guarantee the availability of any item on our menu.We are not responsible for any allergies or dietary restrictions.All orders are final and non-refundable.We reserve the right to cancel any order at any time.We reserve the right to refuse any returns or exchanges.'],
                    ['locale' => 'ar', 'description' => 'من خلال تقديم طلب لنا، فإنك توافق على شروطنا وأحكامنا. نحن نحتفظ بالحق في رفض الخدمة لأي شخص. جميع الأسعار قابلة للتغيير بدون إشعار مسبق. نحن لسنا مسؤولين عن فقدان الأشياء أو سرقتها. نحن نحتفظ بالحق في إجراء تغييرات على قائمة الطعام بدون إشعار مسبق. لا نضمن توافر أي عنصر في قائمة الطعام. لسنا مسؤولين عن أي حساسيات أو قيود غذائية. جميع الطلبات نهائية ولا يمكن استردادها. نحن نحتفظ بالحق في إلغاء أي طلب في أي وقت. نحن نحتفظ بالحق في رفض أي إرجاع أو تبديل.'],
                ],
            ],
            // add more privacyPolicy as needed
        ];
    }
}
