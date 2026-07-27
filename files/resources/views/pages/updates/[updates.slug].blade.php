{{-- Dynamic page: one URL per entry of resources/data/collections/updates.json, matched on `slug` — $updates is the entry. Add an entry there to publish; its `content` HTML is the body. --}}
<x-layouts.post
    :title="$updates->title"
    :description="$updates->description"
    :category="$updates->category"
    :date="$updates->date"
    :readTime="$updates->readTime"
    :author="$updates->author"
    :authorRole="$updates->authorRole"
    :authorImage="$updates->authorImage"
    :image="$updates->image"
    :imageAlt="$updates->imageAlt">

    {!! $updates->content !!}

</x-layouts.post>
