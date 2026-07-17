<!-- Pricing — served at "/pricing". -->
<x-layouts.main title="Pricing" description="Start free, scale when it sticks. Every plan includes unlimited issues, the public changelog, and the fastest sync engine in the category.">

    <x-sections.page-header
        eyebrow="Pricing"
        heading="Simple plans, honest limits"
        body="No per-feature nickel-and-diming. Pick the plan that matches how your team ships today, and change it the day that changes." />

    <x-sections.pricing
        eyebrow="Plans"
        heading="Start free. Scale when it sticks."
        body="Every plan includes unlimited issues, the public changelog, and the fastest sync engine in the category."
        :items="$plans" />

    <x-sections.stats
        eyebrow="Why teams switch"
        heading="The numbers behind the pitch"
        :items="$stats" />

    <x-sections.faq :items="$faq" />

    <x-sections.cta
        heading="Two minutes to a workspace"
        body="Start on Free, import your tracker, and upgrade only when the whole team is already living in Draft." />

</x-layouts.main>
