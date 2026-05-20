<?php

use Livewire\Component;

new class extends Component
{
    public string $scanResult = '';

    public function setScanResult($value): void
    {
        $this->scanResult = $value;
    }
};
