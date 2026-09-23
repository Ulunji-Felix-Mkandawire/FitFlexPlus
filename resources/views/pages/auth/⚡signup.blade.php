<?php

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

new class extends Component {
    public string $userName;
    public string $userEmail;
    public string $userPassword;

    public function signup()
    {
        // Form input validation
        $validated = $this->validate([
            'userName' => ['required', 'string', 'mim:3', 'max:50'],
            'userEmail' => ['required', 'email', 'unique:users'],
            'userPassword' => ['required', 'min:0', 'confirmed'],
        ]);

        // New user creation
        $newUser = User::create($validated);

        // New user login with Auth facade
        Auth::login($newUser);

        // User Redirection
        $this->redirect('dashboard.index', navigate: true);
        
    }
};
?>

<div>
    {{-- The whole future lies in uncertainty: live immediately. - Seneca --}}
</div>
