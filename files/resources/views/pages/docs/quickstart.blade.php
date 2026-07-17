<!-- Docs — served at "/docs/quickstart". The sidebar comes from the docs collection. -->
<x-layouts.doc
    title="Quickstart"
    description="From zero to a planned cycle in about ten minutes — workspace, first issues, and your import."
    section="Guides"
    :nav="$docs">

    <h2>1. Create your workspace</h2>

    <p>Sign up, name the workspace after your company, and pick a URL. You can rename both later, so don't overthink it — <code>acme.draft.dev</code> is a fine place to start.</p>

    <h2>2. Invite the first team</h2>

    <p>Draft is organized around teams, and each team owns its own issues and cycles. Create one team for the group that ships most often, and invite those people first. A tool like this proves itself through daily use — one live team beats five empty ones.</p>

    <h2>3. Import your tracker</h2>

    <p>Open the command menu and type <code>import</code>. The importer connects to the most popular trackers, maps projects and labels automatically, and always runs a dry pass first so you can review the mapping before anything lands. Your old issue IDs stay searchable after the move, so muscle memory keeps working.</p>

    <ul>
        <li>History, comments, and attachments come along.</li>
        <li>The dry run shows exactly what will map where.</li>
        <li>Imports are idempotent — run them again safely.</li>
    </ul>

    <h2>4. Plan your first cycle</h2>

    <p>Cycles are short planning windows — most teams pick two weeks. Open your team, start a cycle, and drag in what the team genuinely expects to finish. Draft rolls unfinished work into the next cycle automatically, so plan honestly rather than hopefully.</p>

    <h2>5. Learn three shortcuts</h2>

    <p>You'll pick the rest up as you go, but these three carry the whole app: <kbd>C</kbd> creates an issue from anywhere, <kbd>Cmd K</kbd> opens the command menu, and <kbd>J</kbd> / <kbd>K</kbd> move through any list. The full map lives in <a href="/docs/keyboard-shortcuts">Keyboard shortcuts</a>.</p>

    <hr>

    <p>That's genuinely the whole setup. For a deeper look at how the pieces fit together, continue to <a href="/docs/core-concepts">Core concepts</a>.</p>

</x-layouts.doc>
