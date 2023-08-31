<?php

namespace App\Http\Livewire;

use App\Models\TermAndCondition;
use Livewire\Component;

class TermAndConditionList extends Component
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
        $termAndConditions = TermAndCondition::when($this->searchName != '', function ($query) {
            $query->whereHas('termAndConditionTranslations', function ($query) {
                $query->where('description', 'like', '%' . $this->searchName . '%');
            });
        })
        ->paginate(10);
        return view('livewire.term-and-condition-list')->with('termAndConditions', $termAndConditions);
    }
}
