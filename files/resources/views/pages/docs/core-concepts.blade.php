<!-- Docs — served at "/docs/core-concepts". The sidebar comes from the docs collection. -->
<x-layouts.doc
    title="Core concepts"
    description="Issues, cycles, projects, and releases — the four nouns of Draft and how they fit together."
    section="Guides"
    :nav="$docs">

    <p>Draft has four nouns. Everything else in the product — views, agents, the changelog — is built out of these. Learn the four and the rest of the interface explains itself.</p>

    <h2>Issues</h2>

    <p>The atom. An issue is one piece of work small enough to finish: a bug, a task, a slice of a feature. Issues belong to a team, carry a status and a priority, and can link to each other as blockers, duplicates, or relations. If a piece of work feels too big to close within a cycle, it probably wants to be a project instead.</p>

    <h2>Cycles</h2>

    <p>The heartbeat. A cycle is a short, repeating planning window — one or two weeks for most teams. You plan a cycle by dragging in the issues the team expects to finish; anything unfinished rolls forward automatically when the cycle ends. There is no ceremony to close a cycle and no way to quietly extend one, which is exactly the point: the burndown records what actually happened.</p>

    <h2>Projects</h2>

    <p>The narrative. A project collects issues that add up to one outcome — a launch, a migration, a quarter-long bet — often across several teams and many cycles. Projects carry a lead, an optional target date, and a health signal, so the roadmap view answers "how is it going?" without a status meeting.</p>

    <h2>Releases</h2>

    <p>The announcement. A release gathers finished work into something you tell the world about. As work merges, it accumulates against the open release; when you cut it, an agent drafts the notes from what's inside, and publishing sends them to your public changelog. Releases are the bridge between the tracker your team lives in and the changelog your customers read.</p>

    <h2>How they compose</h2>

    <table>
        <thead>
            <tr>
                <th>Noun</th>
                <th>Answers</th>
                <th>Typical span</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Issue</td>
                <td>What's the next unit of work?</td>
                <td>Hours to days</td>
            </tr>
            <tr>
                <td>Cycle</td>
                <td>What are we finishing right now?</td>
                <td>One to two weeks</td>
            </tr>
            <tr>
                <td>Project</td>
                <td>What outcome are we building toward?</td>
                <td>Weeks to a quarter</td>
            </tr>
            <tr>
                <td>Release</td>
                <td>What do we tell the world?</td>
                <td>Whenever you ship</td>
            </tr>
        </tbody>
    </table>

    <p>A healthy workspace uses all four but lives in cycles. Plan honestly, let unfinished work roll, cut releases often — and the changelog writes the company's history as a side effect.</p>

</x-layouts.doc>
