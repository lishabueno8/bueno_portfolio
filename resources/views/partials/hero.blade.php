<section id="home" class="relative scroll-mt-20 overflow-hidden">
    <div class="pointer-events-none absolute -top-24 -right-24 h-72 w-72 rounded-full bg-primary/10 blur-3xl" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -bottom-24 -left-24 h-72 w-72 rounded-full bg-secondary/10 blur-3xl" aria-hidden="true"></div>

    <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-4 py-20 sm:px-6 md:py-28 lg:grid-cols-2 lg:px-8">
        <div>
            <span class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-wider text-primary">
                <span class="h-2 w-2 rounded-full bg-primary" aria-hidden="true"></span>
                {{ $profile['role'] }}
            </span>

            <h1 class="mt-6 text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                Hi, I&rsquo;m
                <span class="bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">{{ $profile['name'] }}</span>
            </h1>

            <p class="mt-4 text-xl font-semibold text-muted-foreground">{{ $profile['tagline'] }}</p>
            <p class="mt-5 max-w-lg text-base leading-relaxed text-muted-foreground">{{ $profile['intro'] }}</p>

            <div class="mt-8 flex flex-wrap items-center gap-3">
                <a href="#contact"
                   class="inline-flex items-center gap-2 rounded-full bg-primary px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-primary/25 transition-all duration-300 hover:-translate-y-0.5 hover:bg-primary/90">
                    <i class="fas fa-paper-plane text-sm" aria-hidden="true"></i>
                    Contact Me
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

        <div class="relative mx-auto w-64 sm:w-80 lg:w-96">
            <div class="absolute inset-0 -translate-y-4 translate-x-4 rounded-[2rem] bg-gradient-to-br from-primary to-secondary opacity-20 blur-sm" aria-hidden="true"></div>

            <div class="relative overflow-hidden rounded-[2rem] border border-border/60 bg-surface p-3 shadow-2xl shadow-black/5 transition-all duration-300 hover:-translate-y-1 hover:border-primary/40 hover:shadow-xl">
                <div class="relative aspect-square overflow-hidden rounded-[1.5rem] bg-gradient-to-br from-primary via-primary/70 to-secondary">
                    <img src="{{ $profile['photo'] }}"
                         alt="{{ $profile['name'] }}"
                         class="h-full w-full object-cover" />
                </div>
            </div>
        </div>
    </div>
</section>