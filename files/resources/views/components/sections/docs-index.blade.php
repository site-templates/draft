@props(['items'])
<!--
    The docs hub: one card per guide, from resources/data/collections/docs.json.
    Each card links to a real page under pages/docs/{slug}.blade.php.
-->
<section id="docs-index" class="py-14 sm:py-16">
    <div class="mx-auto w-full max-w-6xl px-6">
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($items as $item)
                <a href="{{ $item->link }}" class="spotlight-card group flex flex-col rounded-2xl border border-line bg-panel p-7 transition-colors duration-300 hover:border-white/15" data-reveal>
                    <span class="flex size-9 items-center justify-center rounded-lg border border-line bg-raised text-accent">
                        {!! $item->icon !!}
                    </span>
                    <h2 class="mt-5 text-[15px] font-medium text-ink transition-colors duration-200 group-hover:text-accent">{{ $item->title }}</h2>
                    <p class="mt-2 text-sm/6 text-pretty text-muted">{{ $item->description }}</p>
                    <span class="mt-auto inline-flex items-center gap-1 pt-6 text-[13px] font-medium text-faint transition-colors duration-200 group-hover:text-muted">
                        Read guide
                        <svg viewBox="0 0 16 16" class="size-3.5 fill-current transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true">
                            <path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/>
                        </svg>
                    </span>
                </a>
            @endforeach
        </div>
    </div>
</section>
