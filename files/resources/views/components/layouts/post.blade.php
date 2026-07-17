@props([
    'title' => '',
    'description' => '',
    'category' => 'Updates',
    'date' => '',
    'readTime' => '',
    'author' => '',
    'authorRole' => '',
    'authorImage' => '',
    'image' => '',
    'imageAlt' => '',
])
<!--
    The shared chrome for an Updates post: breadcrumb, category and date, a big
    centered title, the byline, an optional lead image, then your words. Write
    the body as plain HTML in the slot; resources/css/site.css styles it via
    the .prose class. Leave image empty to skip the lead image entirely.
-->
<x-layouts.main :title="$title" :description="$description">

    <article class="relative overflow-hidden pt-32 pb-24 sm:pt-40 sm:pb-32">
        <div class="glow pointer-events-none absolute inset-x-0 top-0 h-[28rem]"></div>

        <div class="relative mx-auto w-full max-w-6xl px-6">

            <div class="mx-auto max-w-2xl">
                <div data-reveal>
                    <a href="/updates" class="group inline-flex items-center gap-1.5 text-sm font-medium text-muted transition-colors duration-200 hover:text-ink">
                        <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current transition-transform duration-200 group-hover:-translate-x-0.5" aria-hidden="true">
                            <path fill-rule="evenodd" d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z" clip-rule="evenodd"/>
                        </svg>
                        Updates
                    </a>
                </div>

                <div class="reveal-1 mt-8 flex items-center gap-3 text-sm" data-reveal>
                    <span class="rounded-full border border-accent/30 bg-accent-soft/40 px-2.5 py-0.5 text-[13px] font-medium text-accent">{{ $category }}</span>
                    <span class="text-faint">{{ $date }}</span>
                    @if ($readTime)
                        <span class="text-faint">·</span>
                        <span class="text-faint">{{ $readTime }}</span>
                    @endif
                </div>

                <h1 class="reveal-1 mt-5 text-4xl font-semibold tracking-tight text-balance sm:text-5xl sm:leading-[1.1]" data-reveal>{{ $title }}</h1>

                <p class="reveal-2 mt-5 text-lg/8 text-pretty text-muted" data-reveal>{{ $description }}</p>

                @if ($author)
                    <div class="reveal-3 mt-8 flex items-center gap-3" data-reveal>
                        <img src="{{ $authorImage }}" alt="" class="size-9 rounded-full object-cover outline-1 -outline-offset-1 outline-white/10">
                        <div class="text-sm">
                            <p class="font-medium text-ink">{{ $author }}</p>
                            <p class="text-faint">{{ $authorRole }}</p>
                        </div>
                    </div>
                @endif
            </div>

            @if ($image)
                <div class="reveal-3 mx-auto mt-12 max-w-4xl sm:mt-16" data-reveal>
                    <img src="{{ $image }}" alt="{{ $imageAlt }}" class="aspect-[16/8] w-full rounded-2xl border border-line object-cover grayscale shadow-2xl shadow-black/40">
                </div>
            @endif

            <div class="prose reveal-4 mx-auto mt-14 max-w-2xl sm:mt-16" data-reveal>
                {{ $slot }}
            </div>

            <!-- The closing card every post shares -->
            <div class="mx-auto mt-16 max-w-2xl rounded-2xl border border-line bg-panel p-8" data-reveal>
                <p class="text-base/7 text-muted">
                    Draft keeps planning, shipping, and announcing in one connected
                    workspace. <a href="/pricing" class="font-medium text-ink underline decoration-accent/50 underline-offset-4 transition-colors duration-200 hover:text-accent">Start for free</a>
                    or <a href="/docs" class="font-medium text-ink underline decoration-accent/50 underline-offset-4 transition-colors duration-200 hover:text-accent">read the docs</a>.
                </p>
            </div>

        </div>
    </article>

</x-layouts.main>
