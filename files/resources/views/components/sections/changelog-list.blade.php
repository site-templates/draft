@props(['items'])
<!--
    The changelog rail: version and date pinned on the left, the release notes
    on the right. Releases live in resources/data/collections/changelog.json —
    newest first; each release's bullet list is an array inside the item.
-->
<section id="changelog" class="py-14 sm:py-16">
    <div class="mx-auto w-full max-w-4xl px-6">
        <div class="flex flex-col">
            @foreach ($items as $release)
                <div class="grid gap-6 border-t border-line py-12 first:border-t-0 first:pt-4 sm:grid-cols-[10rem_1fr] sm:gap-10" data-reveal>

                    <div class="sm:sticky sm:top-24 sm:self-start">
                        <p class="font-mono text-sm font-medium text-accent">{{ $release->version }}</p>
                        <p class="mt-1.5 text-[13px] text-faint">{{ $release->date }}</p>
                    </div>

                    <div>
                        <h2 class="text-xl font-semibold tracking-tight text-pretty sm:text-2xl">{{ $release->title }}</h2>
                        <p class="mt-3 text-[15px]/7 text-pretty text-muted">{{ $release->body }}</p>

                        <ul role="list" class="mt-6 flex flex-col gap-2.5 text-[15px] text-muted">
                            @foreach ($release->items as $line)
                                <li class="flex items-start gap-3">
                                    <span class="mt-2.5 size-1 shrink-0 rounded-full bg-faint"></span>
                                    {{ $line }}
                                </li>
                            @endforeach
                        </ul>

                        <div class="mt-6 flex flex-wrap gap-2">
                            @foreach ($release->tags as $tag)
                                <span class="rounded-full border border-line bg-panel px-2.5 py-0.5 text-xs font-medium text-muted">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>
