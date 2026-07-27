{{-- Dynamic page: one URL per entry of resources/data/collections/docs.json, matched on `slug` — $docs is the entry. Add an entry there to publish; its `content` HTML is the body. --}}
<x-layouts.doc
    :title="$docs->title"
    :description="$docs->description"
    :section="$docs->section"
    :nav="$entries">

    {!! $docs->content !!}

</x-layouts.doc>
