<?php

namespace App\Livewire\Page;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\StakeholderSubmission;
class SupplementaryList extends Component
{


    use WithPagination;

    public $search = '';
    public $perPage = 10;
    public $selectedSubmissionId = null;

    protected $queryString = ['search'];

    public $total, $byType = [];

public function mount()
{
    $this->total = StakeholderSubmission::count();
    $this->byType = StakeholderSubmission::selectRaw('organization_type, COUNT(*) as count')
        ->groupBy('organization_type')
        ->pluck('count', 'organization_type')
        ->toArray();
}



    public function viewDetails($id)
    {
        $this->selectedSubmissionId = $id;

      
    }

    public function closeModal()
    {
        $this->selectedSubmissionId = null;
    }

    public function render()
    {
        $submissions = StakeholderSubmission::query()
            ->when($this->search, fn($q) => $q->where('institution_name', 'like', "%{$this->search}%"))
            ->orderByDesc('created_at')
            ->paginate($this->perPage);

        $selected = $this->selectedSubmissionId
            ? StakeholderSubmission::find($this->selectedSubmissionId)
            : null;

        return view('livewire.page.supplementary-list', compact('submissions', 'selected'));
    }


    
}
