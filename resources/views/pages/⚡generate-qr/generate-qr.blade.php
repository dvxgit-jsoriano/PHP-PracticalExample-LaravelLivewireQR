<div class="min-h-screen bg-slate-900 px-4 py-10">
    <div class="max-w-xl mx-auto">

        <div class="mb-8">
            <h1 class="text-3xl font-bold text-white">
                Generate QR
            </h1>

            <p class="text-slate-400 mt-2">
                Create QR codes instantly.
            </p>
        </div>

        <div class="rounded-3xl bg-slate-800 border border-slate-700 p-6 space-y-6">

            <div>
                <label class="block text-sm text-slate-300 mb-2">
                    QR Content
                </label>

                <textarea wire:model="content" rows="5" class="w-full rounded-2xl bg-slate-900 border border-slate-700 text-white px-4 py-3" placeholder="Enter URL or text..."></textarea>
            </div>

            <button wire:click="generateQr" class="w-full rounded-2xl bg-cyan-500 hover:bg-cyan-600 transition text-white font-bold py-4">
                Generate QR
            </button>

            @if($generatedQr)
            <div class="bg-white rounded-3xl p-6 flex justify-center">
                {!! $generatedQr !!}
            </div>
            @endif

        </div>
    </div>
</div>
