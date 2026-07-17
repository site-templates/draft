@props([
    'heading' => 'Ship your next release with Draft',
    'body' => 'Set up a workspace in under two minutes. Import from your current tracker with one command.',
    'buttonText' => 'Start building',
    'buttonLink' => '/pricing',
    'secondaryText' => 'Read the docs',
    'secondaryLink' => '/docs',
])
<!--
    The closing move: a glowing panel on the dot grid with two actions.
-->
<section id="cta" class="py-20 sm:py-28">
    <div class="mx-auto w-full max-w-6xl px-6">
        <div class="relative overflow-hidden rounded-3xl border border-line bg-panel px-8 py-16 text-center sm:px-16 sm:py-24" data-reveal>
            <div class="glow pointer-events-none absolute inset-x-0 -top-24 h-72"></div>
            <div class="dot-grid pointer-events-none absolute inset-0"></div>

            <div class="relative">
                <svg viewBox="0 0 173 91" fill="none" class="mx-auto h-7 w-auto text-ink" aria-hidden="true">
                    <path fill="currentColor" d="M95.5 17.1 72 35.4c-1.4 1-3.2 1.6-5.3 1.6H51.1l12-12.4c4-5 9.6-7.6 16.6-7.6h15.8zM68.6 45 44.2 62.7c-1.9 1.4-3.7 1.6-6.1 1.6h-13l.1-.3L37 52.3c5-4.7 10.3-7.3 17.8-7.4h13.9zM46.9 72.3 24.8 88.8c-1.9 1.4-4 2.2-6.3 2.2H0v-.1L10.1 80c4.8-5 10.3-7.9 17.1-7.9zM121.6 54.7H83.8c-7 .1-14.5 1.9-21 6.3L46.7 72.5H99c6.8 0 13.1-3.4 17.1-9.4zM147.2 27.3h-42.8c-6.5 0-14.1 1.9-20.7 6.7l-15 11h56.9c6.8.2 12.2-2.9 15.7-8.2zM172.799 0h-43c-6.5.1-12.6 2.4-19.3 7l-15.1 10.3h56c6.3-.1 11.9-3 15.4-8.1z"/>
                </svg>

                <h2 class="mx-auto mt-8 max-w-[24ch] text-3xl font-semibold tracking-tight text-balance sm:text-[2.5rem] sm:leading-[1.15]">{{ $heading }}</h2>
                <p class="mx-auto mt-4 max-w-[46ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>

                <div class="mt-10 flex flex-wrap items-center justify-center gap-3">
                    <a href="{{ $buttonLink }}" class="rounded-lg bg-ink px-5 py-2.5 text-sm font-medium text-canvas shadow-[0_0_0_1px_rgba(255,255,255,0.06)] transition-colors duration-200 hover:bg-white">{{ $buttonText }}</a>
                    <a href="{{ $secondaryLink }}" class="group inline-flex items-center gap-1.5 rounded-lg border border-line bg-panel/60 px-5 py-2.5 text-sm font-medium text-ink backdrop-blur transition-colors duration-200 hover:border-faint">
                        {{ $secondaryText }}
                        <svg viewBox="0 0 16 16" class="size-3.5 fill-current opacity-50 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true">
                            <path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
