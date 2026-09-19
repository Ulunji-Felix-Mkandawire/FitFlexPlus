<?php

use Livewire\Component;
use App\Models\User;



new class extends Component {
    public string $userName;
    public string $userEmail;
    public string $userPassword;

    public function signup()
    {
        $this->validate([
            'userName' => 'required|string|mim:3|max:50'
        ]);
    }
};
?>

<div>
    {{-- The whole future lies in uncertainty: live immediately. - Seneca --}}
</div>
