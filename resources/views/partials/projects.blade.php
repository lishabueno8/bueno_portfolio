<section id="projects" class="scroll-mt-20">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 md:py-28 lg:px-8">
        <div class="mx-auto mb-14 max-w-2xl text-center">
            <span class="text-xs font-semibold uppercase tracking-widest text-primary">My Works and Projects</span>
            <h2 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-4xl">
                Projects I have built
            </h2>
            <p class="mt-4 text-base leading-relaxed text-muted-foreground">
                A closer look at the systems and applications I have worked on.
            </p>
        </div>

        <div class="space-y-8">
            @foreach ($projects as $project)
                <article class="overflow-hidden rounded-3xl border border-border/60 bg-surface shadow-lg shadow-black/5 transition-all duration-300 hover:border-primary/40">
                    <div class="flex flex-col gap-6 p-6 sm:p-8 lg:flex-row lg:items-start lg:justify-between">
                        <div class="max-w-2xl">
                            <span class="inline-flex items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">
                                <i class="fas fa-folder text-xs" aria-hidden="true"></i>
                                Featured Project
                            </span>

                            <h3 class="mt-4 text-2xl font-extrabold tracking-tight sm:text-3xl">
                                {{ $project['title'] }}
                            </h3>

                            <p class="mt-4 text-base leading-relaxed text-muted-foreground">
                                {{ $project['description'] }}
                            </p>

                            <ul class="mt-6 flex flex-wrap gap-2">
                                @foreach ($project['tags'] as $tag)
                                    <li class="rounded-full border border-border/60 bg-background px-3 py-1 text-xs font-semibold text-muted-foreground">
                                        {{ $tag }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-4 border-t border-border/60 p-6 sm:grid-cols-3 sm:p-8">
                        @foreach ($project['screenshots'] as $screenshot)
                            <button type="button"
                                    data-project-open="{{ $screenshot['image'] }}"
                                    data-project-title="{{ $project['title'] }} — {{ $screenshot['label'] }}"
                                    class="group overflow-hidden rounded-2xl border border-border/60 bg-background text-left transition-all duration-300 hover:-translate-y-1 hover:border-primary/40 hover:shadow-lg focus:outline-none focus-visible:ring-2 focus-visible:ring-primary">
                                <div class="relative aspect-video overflow-hidden border-b border-border/60">
                                    <img src="{{ $screenshot['image'] }}"
                                         alt="{{ $project['title'] }} — {{ $screenshot['label'] }}"
                                         loading="lazy"
                                         class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" />
                                    <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                        <span class="inline-flex items-center gap-2 rounded-full bg-primary px-4 py-2 text-sm font-semibold text-white shadow-lg">
                                            <i class="fas fa-expand" aria-hidden="true"></i>
                                            View
                                        </span>
                                    </div>
                                </div>
                                <span class="block px-4 py-3 text-sm font-medium text-muted-foreground transition-colors duration-300 group-hover:text-primary">
                                    {{ $screenshot['label'] }}
                                </span>
                            </button>
                        @endforeach
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<div id="project-modal"
     class="fixed inset-0 z-[100] hidden items-center justify-center p-4"
     role="dialog"
     aria-modal="true"
     aria-label="Project screenshot view">
    <div id="project-modal-backdrop" class="absolute inset-0 bg-black/70 backdrop-blur-sm"></div>

    <div class="relative z-10 flex max-h-full w-full max-w-6xl flex-col overflow-hidden rounded-2xl border border-border/60 bg-surface shadow-2xl">
        <div class="flex items-center justify-between border-b border-border/60 px-5 py-3">
            <h3 id="project-modal-title" class="text-lg font-bold"></h3>
            <button id="project-modal-close"
                    type="button"
                    aria-label="Close"
                    class="flex h-9 w-9 items-center justify-center rounded-full text-muted-foreground transition-colors duration-200 hover:bg-primary/10 hover:text-primary">
                <i class="fas fa-xmark" aria-hidden="true"></i>
            </button>
        </div>
        <div class="overflow-auto p-4">
            <img id="project-modal-image"
                 src=""
                 alt=""
                 class="mx-auto max-h-[75vh] w-auto rounded-lg object-contain" />
        </div>
    </div>
</div>
