<div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 flex items-center justify-center px-4 py-10">
    <div class="w-full max-w-md">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-extrabold text-white tracking-tight">
                QR Tools
            </h1>
            <p class="text-slate-300 mt-3 text-sm">
                Generate and scan QR codes easily.
            </p>
        </div>

        <div class="flex flex-col gap-5">
            <a href="{{ route('/generate-qr') }}" class="group w-full rounded-3xl bg-gradient-to-r from-cyan-500 to-blue-600 p-[2px] shadow-2xl transition duration-300 hover:scale-[1.02] hover:shadow-cyan-500/40">
                <div class="rounded-3xl bg-slate-900 px-6 py-6 flex items-center justify-between">
                    <div>
                        <h2 class="text-white text-xl font-bold">
                            Generate QR
                        </h2>
                        <p class="text-slate-400 text-sm mt-1">
                            Create a new QR code instantly.
                        </p>
                    </div>

                    <div class="h-12 w-12 rounded-2xl bg-cyan-500/20 flex items-center justify-center text-cyan-400 text-2xl group-hover:bg-cyan-500/30 transition">
                        ➜
                    </div>
                </div>
            </a>

            <a href="{{ route('/scanner-qr') }}" class="group w-full rounded-3xl bg-gradient-to-r from-emerald-500 to-green-600 p-[2px] shadow-2xl transition duration-300 hover:scale-[1.02] hover:shadow-emerald-500/40">
                <div class="rounded-3xl bg-slate-900 px-6 py-6 flex items-center justify-between">
                    <div>
                        <h2 class="text-white text-xl font-bold">
                            Scanner QR
                        </h2>
                        <p class="text-slate-400 text-sm mt-1">
                            Scan and read QR codes quickly.
                        </p>
                    </div>

                    <div class="h-12 w-12 rounded-2xl bg-emerald-500/20 flex items-center justify-center text-emerald-400 text-2xl group-hover:bg-emerald-500/30 transition">
                        ➜
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
