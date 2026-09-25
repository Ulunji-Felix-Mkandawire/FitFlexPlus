<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('FitFlexPlus')] class extends Component {
    //
};
?>

<div class="bg-canvas">

    <div class="top-0 absolute flex justify-between items-center px-40 py-2.5 border-b border-b-divider w-full">
        <div class="size-6">
            <img src="{{ asset('images/FitFlexPlus.png') }}" alt="FitFlexPlus logo" class="size-full" />
        </div>

        <div class="flex gap-x-2.5">
            <a href="#" class="px-5 py-1 border border-divider rounded-sm text-primary-text">Sign up</a>
            <a href="#" class="px-5 py-1 rounded-sm text-primary-text">Sign in</a>
        </div>
    </div>

    <div class="place-content-center grid h-screen">
        <h2 class="font-[Orbitron] text-primary-text text-2xl">FitFlexPlus</h2>
    </div>

</div>
