@props([
    'title' => '',
    'description' => '',
    'section' => 'Documentation',
    'nav',
])
<!--
    The chrome for a docs page: a sticky sidebar built from the docs collection
    (passed in as the bound nav attribute), then the article itself. main.js
    marks the current sidebar link via aria-current. Write the body as plain
    HTML in the slot; .prose in site.css handles the typography.
-->
<x-layouts.main :title="$title" :description="$description">

    <div class="mx-auto w-full max-w-6xl px-6 pt-28 pb-24 sm:pt-32">
        <div class="grid gap-12 lg:grid-cols-[15rem_1fr]">

            <!-- Sidebar -->
            <aside class="max-lg:border-b max-lg:border-line max-lg:pb-8 lg:sticky lg:top-24 lg:self-start" data-reveal>
                <a href="/docs" class="group inline-flex items-center gap-1.5 text-sm font-medium text-muted transition-colors duration-200 hover:text-ink">
                    <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-current transition-transform duration-200 group-hover:-translate-x-0.5" aria-hidden="true">
                        <path fill-rule="evenodd" d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z" clip-rule="evenodd"/>
                    </svg>
                    Docs
                </a>

                <nav class="mt-6" aria-label="Documentation" data-doc-nav>
                    <p class="font-mono text-[11px] font-medium tracking-widest text-faint uppercase">Guides</p>
                    <ul role="list" class="mt-3 flex flex-col gap-0.5 border-l border-line text-sm">
                        @foreach ($nav as $item)
                            <li>
                                <a href="{{ $item->link }}" class="-ml-px block border-l border-transparent py-1.5 pl-4 text-muted transition-colors duration-200 hover:border-faint hover:text-ink aria-[current]:border-accent aria-[current]:font-medium aria-[current]:text-ink">
                                    {{ $item->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </aside>

            <!-- Article -->
            <article class="min-w-0 max-w-2xl">
                <p class="reveal-1 font-mono text-[11px] font-medium tracking-widest text-accent uppercase" data-reveal>{{ $section }}</p>
                <h1 class="reveal-1 mt-3 text-3xl font-semibold tracking-tight text-balance sm:text-4xl" data-reveal>{{ $title }}</h1>
                <p class="reveal-2 mt-4 text-lg/8 text-pretty text-muted" data-reveal>{{ $description }}</p>

                <div class="prose reveal-3 mt-10 border-t border-line pt-10" data-reveal>
                    {{ $slot }}
                </div>
            </article>

        </div>
    </div>

</x-layouts.main>
