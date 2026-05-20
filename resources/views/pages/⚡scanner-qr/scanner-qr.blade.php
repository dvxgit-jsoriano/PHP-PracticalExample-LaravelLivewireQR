<div class="min-h-screen bg-slate-900 px-4 py-10">
    <div class="max-w-2xl mx-auto">

        <div class="mb-8">
            <h1 class="text-3xl font-bold text-white">
                Scanner QR
            </h1>

            <p class="text-slate-400 mt-2">
                Scan QR codes using your camera.
            </p>
        </div>

        <div class="rounded-3xl bg-slate-800 border border-slate-700 p-6 space-y-6">

            {{-- Camera Scanner --}}
            <div id="reader" class="overflow-hidden rounded-3xl border border-slate-700"></div>

            {{-- Result --}}
            <div class="rounded-2xl bg-slate-900 border border-slate-700 p-5">
                <div class="text-slate-400 text-sm mb-2">
                    Scan Result
                </div>

                <div class="text-white break-all">
                    {{ $scanResult ?: 'No QR detected yet.' }}
                </div>
            </div>

        </div>
    </div>
</div>

@script
<script type="module">
    let html5QrCode = null;

    function onScanSuccess(decodedText) {

        console.log(decodedText);

        if (html5QrCode) {
            html5QrCode.stop();
        }

        // Check if QR is URL
        if (
            decodedText.startsWith('http://') ||
            decodedText.startsWith('https://')
        ) {
            window.location.href = decodedText;
            return;
        }

        // Otherwise send to Livewire
        @this.call('setScanResult', decodedText);
    }

    html5QrCode = new window.Html5Qrcode("reader");

    html5QrCode.start(
        { facingMode: "environment" },
        {
            fps: 10,
            qrbox: {
                width: 250,
                height: 250
            }
        },
        onScanSuccess
    );
</script>
@endscript
