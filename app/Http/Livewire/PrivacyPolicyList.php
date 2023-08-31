<?php

namespace App\Http\Livewire;

use App\Models\PrivacyPolicy;
use Livewire\Component;

class PrivacyPolicyList extends Component
{
    /**
    * Declare a public property $searchName
    * @var string
    */
    public string $searchName;

    /**
     * Lifecycle method that is called when the component is initialized
     * @return void
     */
    public function mount(): void
    {
        $this->searchName = '';
    }

    public function render()
    {
        $privacyPolicies = PrivacyPolicy::when($this->searchName != '', function ($query) {
            $query->whereHas('privacyPolicyTranslations', function ($query) {
                $query->where('description', 'like', '%' . $this->searchName . '%');
            });
        })
        ->paginate(10);
        return view('livewire.privacy-policy-list')->with('privacyPolicies', $privacyPolicies);
    }
}
