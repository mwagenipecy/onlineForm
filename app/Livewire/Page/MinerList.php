<?php

namespace App\Livewire\Page;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\MinerProfile;
class MinerList extends Component
{


    use WithPagination;

    public $search = '';

    protected $paginationTheme = 'tailwind';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $profiles = MinerProfile::query()
            ->when($this->search, fn ($q) =>
                $q->where('interviewer_name', 'like', "%{$this->search}%")
                  ->orWhere('region', 'like', "%{$this->search}%")
                  ->orWhere('district', 'like', "%{$this->search}%")
                  ->orWhere('ward', 'like', "%{$this->search}%")
                  ->orWhere('respondent_name', 'like', "%{$this->search}%")
            )
            ->latest()
            ->paginate(10);

        return view('livewire.page.miner-list', compact('profiles'));
    }


  
}
