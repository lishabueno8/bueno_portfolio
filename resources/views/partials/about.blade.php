<section id="about" class="scroll-mt-20">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 md:py-28 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <span class="text-xs font-semibold uppercase tracking-widest text-primary">About Me</span>
            <h2 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-4xl">
                A short story about who I am
            </h2>

            <div class="mt-6 space-y-4 text-base leading-relaxed text-muted-foreground">
                @foreach ($profile['about'] as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>

            <ul class="mx-auto mt-8 max-w-xl space-y-3 text-left">
                @foreach ($profile['highlights'] as $highlight)
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10">
                            <i class="fas fa-check text-xs text-primary" aria-hidden="true"></i>
                        </span>
                        <span class="text-sm text-muted-foreground">{{ $highlight }}</span>
                    </li>
                @endforeach
            </ul>

            <div class="mt-8 flex flex-wrap justify-center gap-3">
                <a href="#contact"
                   class="inline-flex items-center gap-2 rounded-full bg-primary px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-primary/25 transition-all duration-300 hover:-translate-y-0.5 hover:bg-primary/90">
                    Say Hello
                    <i class="fas fa-paper-plane text-sm" aria-hidden="true"></i>
                </a>
                <a href="{{ $profile['github'] }}"
                   target="_blank"
                   rel="noopener"
                   class="inline-flex items-center gap-2 rounded-full border border-border bg-background px-6 py-3 text-sm font-semibold text-foreground transition-all duration-300 hover:-translate-y-0.5 hover:border-primary hover:text-primary">
                    <i class="fab fa-github" aria-hidden="true"></i>
                    My GitHub
                </a>
            </div>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-4 sm:grid-cols-3">
            @foreach ($stats as $stat)
                <div class="group rounded-2xl border border-border/60 bg-surface p-6 text-center transition-all duration-300 hover:-translate-y-1 hover:border-primary/40 hover:shadow-lg">
                    <span class="block bg-gradient-to-r from-primary to-secondary bg-clip-text text-4xl font-extrabold text-transparent">
                        {{ $stat['value'] }}
                    </span>
                    <span class="mt-2 block text-sm font-medium text-muted-foreground">{{ $stat['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>