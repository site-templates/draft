<!--
    Changelog — served at "/changelog". Releases live in
    resources/data/collections/changelog.json, newest first.
-->
<x-layouts.main title="Changelog" description="New features, improvements, and fixes in Draft — shipped weekly and written for humans.">

    <x-sections.page-header
        eyebrow="Changelog"
        heading="What's new in Draft"
        body="Everything we ship, as we ship it. Subscribe by RSS or get the weekly digest in your inbox." />

    <x-sections.changelog-list :items="$changelog" />

    <x-sections.cta
        heading="Want these in your inbox?"
        body="One email a week, only when something shipped. Unsubscribe survives forever."
        buttonText="Get the digest"
        buttonLink="#"
        secondaryText="All updates"
        secondaryLink="/updates" />

</x-layouts.main>
