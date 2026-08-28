<section id="certificates" class="scroll-mt-20">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 md:py-28 lg:px-8">
        <div class="mx-auto mb-14 max-w-2xl text-center">
            <span class="text-xs font-semibold uppercase tracking-widest text-primary">Certificates</span>
            <h2 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-4xl">
                Certifications & achievements
            </h2>
            <p class="mt-4 text-base leading-relaxed text-muted-foreground">
                Certificates and achievements I have earned along the way.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($certificates as $certificate)
                <button type="button"
                        data-cert-open="{{ $certificate['image'] }}"
                        class="group flex flex-col overflow-hidden rounded-2xl border border-border/60 bg-surface text-left transition-all duration-300 hover:-translate-y-1.5 hover:border-primary/40 hover:shadow-xl focus:outline-none focus-visible:ring-2 focus-visible:ring-primary">
                    <div class="relative aspect-[4/3] overflow-hidden border-b border-border/60 bg-background">
                        <img src="{{ $certificate['image'] }}"
                             alt="{{ $certificate['title'] }}"
                             loading="lazy"
                             class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" />
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <span class="inline-flex items-center gap-2 rounded-full bg-primary px-4 py-2 text-sm font-semibold text-white shadow-lg">
                                <i class="fas fa-expand" aria-hidden="true"></i>
                                View
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-1 flex-col p-6">
                        <h3 class="text-lg font-bold transition-colors duration-300 group-hover:text-primary">{{ $certificate['title'] }}</h3>
                        <p class="mt-1 text-sm font-semibold text-primary">{{ $certificate['issuer'] }}</p>
                        <span class="mt-4 inline-flex items-center gap-1.5 self-start rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">
                            <i class="fas fa-calendar text-xs" aria-hidden="true"></i>
                            {{ $certificate['year'] }}
                        </span>
                    </div>
                </button>
            @endforeach
        </div>
    </div>
</section>

<div id="certificate-modal"
     class="fixed inset-0 z-[100] hidden items-center justify-center p-4"
     role="dialog"
     aria-modal="true"
     aria-label="Certificate view">
    <div id="certificate-modal-backdrop" class="absolute inset-0 bg-black/70 backdrop-blur-sm"></div>

    <div class="relative z-10 flex max-h-full w-full max-w-4xl flex-col overflow-hidden rounded-2xl border border-border/60 bg-surface shadow-2xl">
        <div class="flex items-center justify-between border-b border-border/60 px-5 py-3">
            <h3 id="certificate-modal-title" class="text-lg font-bold"></h3>
            <button id="certificate-modal-close"
                    type="button"
                    aria-label="Close"
                    class="flex h-9 w-9 items-center justify-center rounded-full text-muted-foreground transition-colors duration-200 hover:bg-primary/10 hover:text-primary">
                <i class="fas fa-xmark" aria-hidden="true"></i>
            </button>
        </div>
        <div class="overflow-auto p-4">
            <img id="certificate-modal-image"
                 src=""
                 alt=""
                 class="mx-auto max-h-[75vh] w-auto rounded-lg object-contain" />
        </div>
    </div>
</div>
