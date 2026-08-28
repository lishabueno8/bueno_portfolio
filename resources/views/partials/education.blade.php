<section id="education" class="scroll-mt-20 bg-surface/60">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 md:py-28 lg:px-8">
        <div class="mx-auto mb-14 max-w-2xl text-center">
            <span class="text-xs font-semibold uppercase tracking-widest text-primary">Education</span>
            <h2 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-4xl">
                My learning journey
            </h2>
            <p class="mt-4 text-base leading-relaxed text-muted-foreground">
                Schools, programs, and certifications that shaped how I build software.
            </p>
        </div>

        <div class="relative mx-auto max-w-3xl">
            <div class="absolute left-6 top-2 bottom-2 w-px bg-border md:left-8" aria-hidden="true"></div>

            <div class="space-y-8">
                @foreach ($education as $item)
                    <div class="group relative pl-16 md:pl-24">
                        <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-2xl border border-border/60 bg-background shadow-sm transition-transform duration-300 group-hover:scale-105">
                            <i class="fas {{ $item['icon'] }}" aria-hidden="true"></i>
                        </div>

                        <div class="rounded-2xl border border-border/60 bg-background p-6 transition-all duration-300 group-hover:-translate-y-1 group-hover:border-primary/40 group-hover:shadow-lg">
                            <div class="flex flex-wrap items-center justify-between gap-2">
                                <h3 class="text-lg font-bold">{{ $item['credential'] }}</h3>
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">
                                    <i class="fas fa-calendar text-xs" aria-hidden="true"></i>
                                    {{ $item['years'] }}
                                </span>
                            </div>
                            <p class="mt-1 text-sm font-semibold text-primary">{{ $item['institution'] }}</p>
                            <p class="mt-3 text-sm leading-relaxed text-muted-foreground">{{ $item['details'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>