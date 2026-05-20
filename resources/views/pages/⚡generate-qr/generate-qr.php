<?php

use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

new class extends Component
{
    public string $content = '';
    public string $generatedQr = '';

    public function generateQr(): void
    {
        if (trim($this->content) === '') {
            return;
        }

        $this->generatedQr = QrCode::size(300)
            ->margin(2)
            ->generate($this->content);
    }
};
