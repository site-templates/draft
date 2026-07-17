<!-- Update — served at "/updates/draft-2-a-new-foundation". -->
<x-layouts.post
    title="Draft 2.0: a new foundation"
    description="A rebuilt sync engine, a faster renderer, and the groundwork for everything we ship this year. The full story of the rewrite."
    category="Company"
    date="Jan 20, 2026"
    readTime="7 min read"
    author="Eli Ambrose"
    authorRole="Cofounder &amp; CTO"
    authorImage="https://assets.ui.sh/avatars/5.webp?size=160"
    image="https://assets.ui.sh/wallpapers/silk.webp?variant=sapphire-flux"
    imageAlt="Abstract sapphire waves">

    <p class="lead">Draft 2.0 is the release you mostly won't see. The visible product is nearly identical to what you used last week — same views, same shortcuts, same changelog. Underneath, almost nothing survived. This is the story of why we rebuilt the foundation, and what it makes possible.</p>

    <h2>The ceiling we hit</h2>

    <p>Draft 1.x was a well-behaved web application: the server owned the truth and the client asked politely for pieces of it. That architecture carried us to thousands of teams, and it had a ceiling we could see clearly by last spring. Every interaction paid a round trip. Caching hid the cost on good networks and lied about it on bad ones. And features we badly wanted — instant search over full history, offline that isn't an apology — kept losing fights with physics.</p>

    <p>You can't optimize your way past a round trip. You have to move the data.</p>

    <h2>Local-first, for real</h2>

    <p>In 2.0, your workspace lives on your machine. Every read hits a local store that syncs continuously in the background; every write applies instantly and reconciles with conflict-free merges when the network allows. The practical consequences:</p>

    <ul>
        <li>Median cross-region sync latency is now <strong>50 milliseconds</strong>, and interface latency is effectively zero — the pixels never wait on a packet.</li>
        <li>Offline is not a mode. Close your laptop mid-edit, reopen it on a plane, keep working. Reconciliation is automatic and history stays linear.</li>
        <li>Search covers your entire history, instantly, because the history is right there.</li>
    </ul>

    <h2>The renderer</h2>

    <p>Moving data solved the waiting; it exposed the drawing. Our old board view struggled past a few hundred visible issues. The new renderer virtualizes everything, batches layout, and holds a steady frame rate on boards ten times that size. If your monitor runs at 120 hertz, so does Draft.</p>

    <blockquote>
        <p>Fast software isn't a feature. It's a posture — a promise that the tool respects your attention more than its own architecture.</p>
    </blockquote>

    <h2>The migration</h2>

    <p>Rewrites earn their bad reputation at the cutover, so we didn't have one. Workspaces migrated in the background over six weeks, each one verified by replaying its full event history against both engines and comparing the results byte for byte. If you didn't notice the switch, that was the plan working.</p>

    <h2>What this unlocks</h2>

    <p>Foundations are only interesting for what stands on them. Agents need cheap access to full history — that's next month. Changelog domains and digests ride the same sync engine — this quarter. And a few things further out become plausible for the first time. 2.0 isn't the destination; it's the ground the rest of the year is built on.</p>

</x-layouts.post>
