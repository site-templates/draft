@props([
    'heading' => 'The workspace where software ships',
    'body' => 'Purpose-built for the whole delivery loop — issues, cycles, releases, and the changelog your customers actually read.',
    'newLabel' => 'New',
    'newText' => 'Draft Agents',
    'newLink' => '/updates/introducing-draft-agents',
])
<!--
    The opening statement: a left-aligned monochrome headline, a one-line
    subcopy with the announcement link on the right, then the product window.
    The window is drawn entirely in HTML and Tailwind — no screenshot to keep
    in sync, always razor sharp. It stays black and white on purpose; the only
    color in the hero is the handful of functional glints inside the mock.
-->
<section id="hero" class="relative overflow-hidden pt-36 pb-8 sm:pt-44">
    <div class="relative mx-auto w-full max-w-6xl px-6">

        <h1 class="max-w-[17ch] text-[2.75rem] leading-[1.08] font-medium tracking-[-0.02em] text-balance sm:text-[4.5rem] sm:leading-[1.05] lg:text-[5rem]" data-reveal>
            {{ $heading }}
        </h1>

        <div class="reveal-1 mt-10 flex flex-wrap items-end justify-between gap-x-12 gap-y-6 sm:mt-14" data-reveal>
            <p class="max-w-[44ch] text-lg/7 text-pretty text-muted">{{ $body }}</p>

            <a href="{{ $newLink }}" class="group flex shrink-0 items-center gap-2.5 text-lg/7">
                <span class="font-medium text-ink">{{ $newLabel }}</span>
                <span class="text-muted transition-colors duration-200 group-hover:text-ink">{{ $newText }}</span>
                <svg viewBox="0 0 16 16" class="size-4 fill-muted transition-all duration-200 group-hover:translate-x-0.5 group-hover:fill-ink" aria-hidden="true">
                    <path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/>
                </svg>
            </a>
        </div>

        <!--
            The product window — pure HTML and Tailwind, aria-hidden decoration.
            An issue-detail view: sidebar, the issue with its activity, and the
            meta rail with a floating agent card.
        -->
        <div class="reveal-2 relative mt-14 sm:mt-20" data-reveal aria-hidden="true">
            <div class="pointer-events-none absolute -inset-x-10 -top-10 bottom-0 rounded-[3rem] bg-white/[0.03] blur-3xl"></div>

            <div class="pointer-events-none relative select-none overflow-hidden rounded-xl border border-line bg-panel shadow-2xl shadow-black/70">
                <div class="grid lg:grid-cols-[13.5rem_1fr] xl:grid-cols-[13.5rem_1fr_17rem]">

                    <!-- Sidebar -->
                    <div class="border-r border-line bg-canvas/60 p-3 max-lg:hidden">
                        <div class="flex items-center gap-2 px-2 py-1.5">
                            <span class="flex size-5 items-center justify-center rounded-md bg-ink text-[10px] font-bold text-canvas">A</span>
                            <span class="text-[13px] font-medium text-ink">Acme Inc</span>
                            <svg viewBox="0 0 16 16" class="size-3 fill-faint" aria-hidden="true"><path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                            <span class="ml-auto flex items-center gap-2 text-faint">
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd"/></svg>
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z"/><path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z"/></svg>
                            </span>
                        </div>

                        <div class="mt-3 flex flex-col gap-0.5 text-[13px] text-muted">
                            <span class="flex items-center gap-2.5 px-2 py-1.5">
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path d="M3 4.25A2.25 2.25 0 0 1 5.25 2h9.5A2.25 2.25 0 0 1 17 4.25v11.5A2.25 2.25 0 0 1 14.75 18h-9.5A2.25 2.25 0 0 1 3 15.75V4.25ZM5.5 6a.75.75 0 0 0 0 1.5h9a.75.75 0 0 0 0-1.5h-9ZM5.5 9.25a.75.75 0 0 0 0 1.5h9a.75.75 0 0 0 0-1.5h-9Z"/></svg>
                                Inbox
                            </span>
                            <span class="flex items-center gap-2.5 px-2 py-1.5">
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-13a.75.75 0 0 0-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 0 0 0-1.5h-3.25V5Z" clip-rule="evenodd"/></svg>
                                My issues
                            </span>
                            <span class="flex items-center gap-2.5 px-2 py-1.5">
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M15.312 11.424a5.5 5.5 0 0 1-9.201 2.466l-.312-.311h2.433a.75.75 0 0 0 0-1.5H3.989a.75.75 0 0 0-.75.75v4.242a.75.75 0 0 0 1.5 0v-2.43l.31.31a7 7 0 0 0 11.712-3.138.75.75 0 0 0-1.449-.39Zm1.23-3.723a.75.75 0 0 0 .219-.53V2.929a.75.75 0 0 0-1.5 0V5.36l-.31-.31A7 7 0 0 0 3.239 8.188a.75.75 0 1 0 1.448.389A5.5 5.5 0 0 1 13.89 6.11l.311.31h-2.432a.75.75 0 0 0 0 1.5h4.243a.75.75 0 0 0 .53-.219Z" clip-rule="evenodd"/></svg>
                                Reviews
                            </span>
                            <span class="flex items-center gap-2.5 px-2 py-1.5">
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path d="M11.983 1.907a.75.75 0 0 0-1.292-.657l-8.5 9.5A.75.75 0 0 0 2.75 12h6.572l-1.305 6.093a.75.75 0 0 0 1.292.657l8.5-9.5A.75.75 0 0 0 17.25 8h-6.572l1.305-6.093Z"/></svg>
                                Pulse
                            </span>
                        </div>

                        <p class="mt-5 px-2 font-mono text-[10px] tracking-widest text-faint uppercase">Workspace</p>
                        <div class="mt-1.5 flex flex-col gap-0.5 text-[13px] text-muted">
                            <span class="flex items-center gap-2.5 px-2 py-1.5">
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path d="M10 1a6 6 0 0 0-3.815 10.631C7.237 12.5 8 13.443 8 14.456v.644a.75.75 0 0 0 .572.729 6.016 6.016 0 0 0 2.856 0A.75.75 0 0 0 12 15.1v-.644c0-1.013.762-1.957 1.815-2.825A6 6 0 0 0 10 1ZM8.863 17.414a.75.75 0 0 0-.226 1.483 9.066 9.066 0 0 0 2.726 0 .75.75 0 0 0-.226-1.483 7.553 7.553 0 0 1-2.274 0Z"/></svg>
                                Initiatives
                            </span>
                            <span class="flex items-center gap-2.5 px-2 py-1.5">
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M2 4.25A2.25 2.25 0 0 1 4.25 2h11.5A2.25 2.25 0 0 1 18 4.25v8.5A2.25 2.25 0 0 1 15.75 15h-3.105a3.501 3.501 0 0 0 1.1 1.677A.75.75 0 0 1 13.26 18H6.74a.75.75 0 0 1-.484-1.323A3.501 3.501 0 0 0 7.355 15H4.25A2.25 2.25 0 0 1 2 12.75v-8.5Z" clip-rule="evenodd"/></svg>
                                Projects
                            </span>
                            <span class="flex items-center gap-2.5 px-2 py-1.5">
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z"/></svg>
                                More
                            </span>
                        </div>

                        <p class="mt-5 px-2 font-mono text-[10px] tracking-widest text-faint uppercase">Favorites</p>
                        <div class="mt-1.5 flex flex-col gap-0.5 text-[13px] text-muted">
                            <span class="flex items-center gap-2.5 rounded-md bg-raised px-2 py-1.5 font-medium text-ink">
                                <span class="relative flex size-3 items-center justify-center rounded-full border-[1.5px] border-amber-400"><span class="size-1 rounded-full bg-amber-400"></span></span>
                                Instant board loading
                            </span>
                            <span class="flex items-center gap-2.5 px-2 py-1.5">
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path d="M15.98 1.804a1 1 0 0 0-1.96 0l-.24 1.192a1 1 0 0 1-.784.785l-1.192.238a1 1 0 0 0 0 1.962l1.192.238a1 1 0 0 1 .785.785l.238 1.192a1 1 0 0 0 1.962 0l.238-1.192a1 1 0 0 1 .785-.785l1.192-.238a1 1 0 0 0 0-1.962l-1.192-.238a1 1 0 0 1-.785-.785l-.238-1.192ZM6.949 5.684a1 1 0 0 0-1.898 0l-.683 2.051a1 1 0 0 1-.633.633l-2.051.683a1 1 0 0 0 0 1.898l2.051.684a1 1 0 0 1 .633.632l.683 2.051a1 1 0 0 0 1.898 0l.683-2.051a1 1 0 0 1 .633-.633l2.051-.683a1 1 0 0 0 0-1.898l-2.051-.683a1 1 0 0 1-.633-.633l-.683-2.051Z"/></svg>
                                Agent tasks
                            </span>
                            <span class="flex items-center gap-2.5 px-2 py-1.5">
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z"/></svg>
                                UI polish
                            </span>
                        </div>
                    </div>

                    <!-- Main pane: the issue -->
                    <div class="min-w-0 bg-panel">
                        <div class="flex items-center gap-2.5 border-b border-line px-5 py-3 text-[13px]">
                            <span class="truncate font-medium text-ink">Instant board loading</span>
                            <svg viewBox="0 0 20 20" class="size-3.5 shrink-0 fill-amber-400" aria-hidden="true"><path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd"/></svg>
                            <svg viewBox="0 0 20 20" class="size-3.5 shrink-0 fill-faint" aria-hidden="true"><path d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z"/></svg>
                            <span class="ml-auto flex shrink-0 items-center gap-2 text-faint">
                                <span class="font-mono text-xs">02 / 145</span>
                                <svg viewBox="0 0 16 16" class="size-3.5 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M11.78 9.78a.75.75 0 0 1-1.06 0L8 7.06 5.28 9.78a.75.75 0 0 1-1.06-1.06l3.25-3.25a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd"/></svg>
                                <svg viewBox="0 0 16 16" class="size-3.5 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                            </span>
                        </div>

                        <div class="px-5 py-6 sm:px-8">
                            <p class="text-xl font-semibold tracking-tight text-ink">Instant board loading</p>
                            <p class="mt-3 max-w-[62ch] text-[13.5px]/6 text-muted">
                                Paint the board from the local snapshot and reconcile
                                <span class="rounded-md border border-line bg-raised px-1.5 py-0.5 font-mono text-[12px] text-ink">board_state</span>
                                in the background, so a cold start never shows a spinner.
                            </p>

                            <p class="mt-8 text-[15px] font-semibold text-ink">Activity</p>

                            <div class="mt-4 flex flex-col gap-3 text-[13px] text-muted">
                                <p class="flex items-center gap-2.5">
                                    <span class="flex size-5 items-center justify-center rounded-full bg-raised text-muted"><svg viewBox="0 0 173 91" fill="none" class="h-1.5 w-auto" aria-hidden="true"><path fill="currentColor" d="M95.5 17.1 72 35.4c-1.4 1-3.2 1.6-5.3 1.6H51.1l12-12.4c4-5 9.6-7.6 16.6-7.6h15.8zM68.6 45 44.2 62.7c-1.9 1.4-3.7 1.6-6.1 1.6h-13l.1-.3L37 52.3c5-4.7 10.3-7.3 17.8-7.4h13.9zM46.9 72.3 24.8 88.8c-1.9 1.4-4 2.2-6.3 2.2H0v-.1L10.1 80c4.8-5 10.3-7.9 17.1-7.9zM121.6 54.7H83.8c-7 .1-14.5 1.9-21 6.3L46.7 72.5H99c6.8 0 13.1-3.4 17.1-9.4zM147.2 27.3h-42.8c-6.5 0-14.1 1.9-20.7 6.7l-15 11h56.9c6.8.2 12.2-2.9 15.7-8.2zM172.799 0h-43c-6.5.1-12.6 2.4-19.3 7l-15.1 10.3h56c6.3-.1 11.9-3 15.4-8.1z"/></svg></span>
                                    <span class="truncate"><span class="text-ink">Draft</span> filed this issue from <span class="text-ink">Slack</span> for <span class="text-ink">mara</span> · 2m</span>
                                </p>
                                <p class="flex items-center gap-2.5">
                                    <span class="flex size-5 items-center justify-center rounded-full bg-raised"><svg viewBox="0 0 20 20" class="size-3 fill-muted" aria-hidden="true"><path fill-rule="evenodd" d="M5.5 3A2.5 2.5 0 0 0 3 5.5v2.879a2.5 2.5 0 0 0 .732 1.767l6.5 6.5a2.5 2.5 0 0 0 3.536 0l2.878-2.878a2.5 2.5 0 0 0 0-3.536l-6.5-6.5A2.5 2.5 0 0 0 8.38 3H5.5ZM6 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd"/></svg></span>
                                    <span class="truncate"><span class="text-ink">Triage</span> added the labels <span class="text-ink">Performance</span> and <span class="text-ink">Web</span> · 2m</span>
                                </p>
                            </div>

                            <div class="mt-5 rounded-xl border border-line bg-canvas/50 p-4">
                                <p class="flex items-center gap-2.5 text-[13px]">
                                    <img src="https://assets.ui.sh/avatars/2.webp?size=160" alt="" class="size-5 rounded-full object-cover" loading="lazy">
                                    <span class="font-medium text-ink">mara</span>
                                    <span class="text-faint">· 4m</span>
                                </p>
                                <p class="mt-2.5 text-[13.5px]/6 text-muted">Right now the spinner outlives the data — the board is ready long before we let anyone see it…</p>
                            </div>

                            <p class="mt-4 flex items-center gap-2.5 text-[13px] text-faint max-xl:hidden">
                                <img src="https://assets.ui.sh/avatars/8.webp?size=160" alt="" class="size-5 rounded-full object-cover" loading="lazy">
                                <span class="font-medium text-muted">theo</span>
                                <span>· just now</span>
                            </p>
                        </div>
                    </div>

                    <!-- Meta rail + the floating agent card -->
                    <div class="relative border-l border-line bg-panel max-xl:hidden">
                        <div class="flex items-center justify-between border-b border-line px-5 py-3">
                            <span class="font-mono text-xs text-faint">COR-214</span>
                            <span class="flex items-center gap-2.5 text-faint">
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path d="M12.232 4.232a2.5 2.5 0 0 1 3.536 3.536l-1.225 1.224a.75.75 0 0 0 1.061 1.06l1.224-1.224a4 4 0 0 0-5.656-5.656l-3 3a4 4 0 0 0 .225 5.865.75.75 0 0 0 .977-1.138 2.5 2.5 0 0 1-.142-3.667l3-3Z"/><path d="M11.603 7.963a.75.75 0 0 0-.977 1.138 2.5 2.5 0 0 1 .142 3.667l-3 3a2.5 2.5 0 0 1-3.536-3.536l1.225-1.224a.75.75 0 0 0-1.061-1.06l-1.224 1.224a4 4 0 1 0 5.656 5.656l3-3a4 4 0 0 0-.225-5.865Z"/></svg>
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M15.988 3.012A2.25 2.25 0 0 1 18 5.25v6.5A2.25 2.25 0 0 1 15.75 14H13.5v-3.379a3 3 0 0 0-.879-2.121l-3.12-3.121a3 3 0 0 0-1.402-.791 2.252 2.252 0 0 1 1.913-1.576A2.25 2.25 0 0 1 12.25 1h1.5a2.25 2.25 0 0 1 2.238 2.012ZM11.5 3.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 .75.75v.25h-3v-.25Z" clip-rule="evenodd"/><path d="M3.5 6A1.5 1.5 0 0 0 2 7.5v9A1.5 1.5 0 0 0 3.5 18h7a1.5 1.5 0 0 0 1.5-1.5v-5.879a1.5 1.5 0 0 0-.44-1.06L8.44 6.44A1.5 1.5 0 0 0 7.38 6H3.5Z"/></svg>
                            </span>
                        </div>

                        <div class="flex flex-col gap-3.5 px-5 py-5 text-[13px]">
                            <p class="flex items-center gap-2.5 text-ink">
                                <span class="relative flex size-3.5 items-center justify-center rounded-full border-[1.5px] border-amber-400"><span class="size-1.5 rounded-full bg-amber-400"></span></span>
                                In Progress
                            </p>
                            <p class="flex items-center gap-2.5 text-ink">
                                <svg viewBox="0 0 16 16" class="size-3.5 fill-muted" aria-hidden="true"><path d="M2 10.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-2.5ZM6.5 7a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V7ZM11 3.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1V13a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3.5Z"/></svg>
                                High
                            </p>
                            <p class="flex items-center gap-2.5 text-ink">
                                <img src="https://assets.ui.sh/avatars/2.webp?size=160" alt="" class="size-4.5 rounded-full object-cover" loading="lazy">
                                mara
                            </p>
                            <p class="flex items-center gap-2.5 pl-4 text-muted">
                                <svg viewBox="0 0 173 91" fill="none" class="h-2 w-auto" aria-hidden="true"><path fill="currentColor" d="M95.5 17.1 72 35.4c-1.4 1-3.2 1.6-5.3 1.6H51.1l12-12.4c4-5 9.6-7.6 16.6-7.6h15.8zM68.6 45 44.2 62.7c-1.9 1.4-3.7 1.6-6.1 1.6h-13l.1-.3L37 52.3c5-4.7 10.3-7.3 17.8-7.4h13.9zM46.9 72.3 24.8 88.8c-1.9 1.4-4 2.2-6.3 2.2H0v-.1L10.1 80c4.8-5 10.3-7.9 17.1-7.9zM121.6 54.7H83.8c-7 .1-14.5 1.9-21 6.3L46.7 72.5H99c6.8 0 13.1-3.4 17.1-9.4zM147.2 27.3h-42.8c-6.5 0-14.1 1.9-20.7 6.7l-15 11h56.9c6.8.2 12.2-2.9 15.7-8.2zM172.799 0h-43c-6.5.1-12.6 2.4-19.3 7l-15.1 10.3h56c6.3-.1 11.9-3 15.4-8.1z"/></svg>
                                Draft
                            </p>
                        </div>

                        <!-- The agent session card -->
                        <div class="absolute right-3 bottom-0 left-3 translate-y-3 rounded-xl border border-line bg-raised/95 shadow-2xl shadow-black/60 backdrop-blur">
                            <div class="flex items-center gap-2 border-b border-line px-4 py-2.5">
                                <svg viewBox="0 0 173 91" fill="none" class="h-2 w-auto text-ink" aria-hidden="true"><path fill="currentColor" d="M95.5 17.1 72 35.4c-1.4 1-3.2 1.6-5.3 1.6H51.1l12-12.4c4-5 9.6-7.6 16.6-7.6h15.8zM68.6 45 44.2 62.7c-1.9 1.4-3.7 1.6-6.1 1.6h-13l.1-.3L37 52.3c5-4.7 10.3-7.3 17.8-7.4h13.9zM46.9 72.3 24.8 88.8c-1.9 1.4-4 2.2-6.3 2.2H0v-.1L10.1 80c4.8-5 10.3-7.9 17.1-7.9zM121.6 54.7H83.8c-7 .1-14.5 1.9-21 6.3L46.7 72.5H99c6.8 0 13.1-3.4 17.1-9.4zM147.2 27.3h-42.8c-6.5 0-14.1 1.9-20.7 6.7l-15 11h56.9c6.8.2 12.2-2.9 15.7-8.2zM172.799 0h-43c-6.5.1-12.6 2.4-19.3 7l-15.1 10.3h56c6.3-.1 11.9-3 15.4-8.1z"/></svg>
                                <span class="text-[13px] font-medium text-ink">Draft Agent</span>
                                <span class="rounded border border-line px-1.5 py-0.5 font-mono text-[10px] text-muted">beta</span>
                                <span class="ml-auto flex items-center gap-2 text-faint">
                                    <svg viewBox="0 0 16 16" class="size-3 fill-current" aria-hidden="true"><path d="M3 8.75a.75.75 0 0 1 .75-.75h8.5a.75.75 0 0 1 0 1.5h-8.5A.75.75 0 0 1 3 8.75Z"/></svg>
                                    <svg viewBox="0 0 16 16" class="size-3 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M12.78 4.28a.75.75 0 0 0-1.06-1.06L8 6.94 4.28 3.22a.75.75 0 0 0-1.06 1.06L6.94 8l-3.72 3.72a.75.75 0 1 0 1.06 1.06L8 9.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L9.06 8l3.72-3.72Z" clip-rule="evenodd"/></svg>
                                </span>
                            </div>
                            <div class="flex flex-col gap-2.5 px-4 py-3.5 text-[12.5px]/5 text-muted">
                                <p class="flex items-center gap-2">
                                    <img src="https://assets.ui.sh/avatars/2.webp?size=160" alt="" class="size-4 rounded-full object-cover" loading="lazy">
                                    <span><span class="text-ink">mara</span> connected the agent to COR-214</span>
                                </p>
                                <p>Reading the startup path…</p>
                                <p class="flex items-center gap-1.5 text-faint">
                                    Worked for 7s
                                    <svg viewBox="0 0 16 16" class="size-3 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                                </p>
                                <p class="text-ink">Pushed a draft PR. Changes:</p>
                                <p class="flex gap-2">
                                    <span class="mt-1.5 size-1 shrink-0 rounded-full bg-faint"></span>
                                    <span><span class="rounded border border-line bg-canvas px-1 py-px font-mono text-[11px] text-ink">useBoardCache.ts</span> — hydrate from the snapshot before first paint</span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Fade the window into the canvas -->
            <div class="pointer-events-none absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-canvas to-transparent"></div>
        </div>
    </div>
</section>
