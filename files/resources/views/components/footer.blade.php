@props([
    'tagline' => 'The system of record for teams that ship.',
    'copyright' => '© 2026 Draft Systems, Inc.',
])
<!--
    The site-wide footer. The tagline and copyright line are editable from the
    Layout tab (footer.yml); the link columns are plain markup — edit them here
    once and they update on every page.
-->
<footer class="relative border-t border-line">
    <div class="dot-grid pointer-events-none absolute inset-0 rotate-180"></div>

    <div class="relative mx-auto w-full max-w-6xl px-6 py-16 sm:py-20">
        <div class="grid gap-12 lg:grid-cols-[1.4fr_1fr_1fr_1fr]">

            <div>
                <a href="/" aria-label="Homepage" class="inline-flex items-center gap-2.5 text-ink">
                    <svg viewBox="0 0 173 91" fill="none" class="h-4 w-auto shrink-0" aria-hidden="true">
                        <path fill="currentColor" d="M95.5 17.1 72 35.4c-1.4 1-3.2 1.6-5.3 1.6H51.1l12-12.4c4-5 9.6-7.6 16.6-7.6h15.8zM68.6 45 44.2 62.7c-1.9 1.4-3.7 1.6-6.1 1.6h-13l.1-.3L37 52.3c5-4.7 10.3-7.3 17.8-7.4h13.9zM46.9 72.3 24.8 88.8c-1.9 1.4-4 2.2-6.3 2.2H0v-.1L10.1 80c4.8-5 10.3-7.9 17.1-7.9zM121.6 54.7H83.8c-7 .1-14.5 1.9-21 6.3L46.7 72.5H99c6.8 0 13.1-3.4 17.1-9.4zM147.2 27.3h-42.8c-6.5 0-14.1 1.9-20.7 6.7l-15 11h56.9c6.8.2 12.2-2.9 15.7-8.2zM172.799 0h-43c-6.5.1-12.6 2.4-19.3 7l-15.1 10.3h56c6.3-.1 11.9-3 15.4-8.1z"/>
                    </svg>
                    <span class="text-[15px] font-semibold tracking-tight">Draft</span>
                </a>
                <p class="mt-4 max-w-[26ch] text-sm/6 text-muted">{{ $tagline }}</p>

                <p class="mt-8 inline-flex items-center gap-2 rounded-full border border-line bg-panel px-3 py-1.5 font-mono text-xs text-muted">
                    <span class="relative flex size-1.5">
                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-ink opacity-40"></span>
                        <span class="relative inline-flex size-1.5 rounded-full bg-ink/80"></span>
                    </span>
                    All systems operational
                </p>
            </div>

            <nav aria-label="Product">
                <p class="font-mono text-[11px] font-medium tracking-widest text-faint uppercase">Product</p>
                <ul role="list" class="mt-4 flex flex-col gap-3 text-sm">
                    <li><a href="/features" class="text-muted transition-colors duration-200 hover:text-ink">Features</a></li>
                    <li><a href="/pricing" class="text-muted transition-colors duration-200 hover:text-ink">Pricing</a></li>
                    <li><a href="/changelog" class="text-muted transition-colors duration-200 hover:text-ink">Changelog</a></li>
                    <li><a href="/docs" class="text-muted transition-colors duration-200 hover:text-ink">Docs</a></li>
                </ul>
            </nav>

            <nav aria-label="Company">
                <p class="font-mono text-[11px] font-medium tracking-widest text-faint uppercase">Company</p>
                <ul role="list" class="mt-4 flex flex-col gap-3 text-sm">
                    <li><a href="/updates" class="text-muted transition-colors duration-200 hover:text-ink">Updates</a></li>
                    <li><a href="/updates/how-northwind-ships-with-draft" class="text-muted transition-colors duration-200 hover:text-ink">Customers</a></li>
                    <li><a href="#" class="text-muted transition-colors duration-200 hover:text-ink">Careers</a></li>
                    <li><a href="#" class="text-muted transition-colors duration-200 hover:text-ink">Contact</a></li>
                </ul>
            </nav>

            <nav aria-label="Connect">
                <p class="font-mono text-[11px] font-medium tracking-widest text-faint uppercase">Connect</p>
                <ul role="list" class="mt-4 flex flex-col gap-3 text-sm">
                    <li><a href="#" class="text-muted transition-colors duration-200 hover:text-ink">X / Twitter</a></li>
                    <li><a href="#" class="text-muted transition-colors duration-200 hover:text-ink">GitHub</a></li>
                    <li><a href="#" class="text-muted transition-colors duration-200 hover:text-ink">YouTube</a></li>
                    <li><a href="#" class="text-muted transition-colors duration-200 hover:text-ink">RSS</a></li>
                </ul>
            </nav>

        </div>

        <div class="mt-14 flex flex-wrap items-center justify-between gap-4 border-t border-line pt-8">
            <p class="text-[13px] text-faint">{{ $copyright }}</p>
            <div class="flex items-center gap-6 text-[13px]">
                <a href="#" class="text-faint transition-colors duration-200 hover:text-muted">Privacy</a>
                <a href="#" class="text-faint transition-colors duration-200 hover:text-muted">Terms</a>
                <a href="#" class="text-faint transition-colors duration-200 hover:text-muted">Security</a>
            </div>
        </div>
    </div>
</footer>
