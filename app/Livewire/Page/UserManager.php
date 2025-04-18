<?php

namespace App\Livewire\Page;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
class UserManager extends Component
{


    use WithPagination;

    public $search = '';
    public $showModal = false;

    // Form fields
    public $name, $email, $password, $role = 'user';

    protected $paginationTheme = 'tailwind';

    protected $rules = [
        'name' => 'required|string|max:100',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function openModal()
    {
        $this->reset(['name', 'email', 'password', 'role']);
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function createUser()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
          
        ]);

        session()->flash('message', 'User created successfully!');
        $this->closeModal();
    }

    public function render()
    {
        $users = User::query()
            ->when($this->search, fn($q) =>
                $q->where('name', 'like', "%{$this->search}%")
                  ->orWhere('email', 'like', "%{$this->search}%")
                  
            )
            ->latest()
            ->paginate(10);

        return view('livewire.page.user-manager', [
            'users' => $users,
            'stats' => [
                'total' => User::count(),
              //  'admins' => User::where('role', 'admin')->count(),
                'users' => User::count(),
            ]
        ]);
    }

    
   
}
