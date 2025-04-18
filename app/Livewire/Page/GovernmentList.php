<?php

namespace App\Livewire\Page;

use App\Models\GovernmentData;
use Livewire\Component;
use Livewire\WithPagination;
class GovernmentList extends Component
{


    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $submissions = GovernmentData::query()
            ->where('region', 'like', '%'.$this->search.'%')
            ->orWhere('institution', 'like', '%'.$this->search.'%')
            ->orWhere('districts', 'like', '%'.$this->search.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $summary = [
            'total' => GovernmentData::count(),
            'unique_regions' => GovernmentData::distinct('region')->count('region'),
            'licensed_miners' => GovernmentData::sum('individual_miners_licensed'),
        ];

        return view('livewire.page.government-list', [
            'submissions' => $submissions,
            'summary' => $summary
        ]);
    }



 
}
