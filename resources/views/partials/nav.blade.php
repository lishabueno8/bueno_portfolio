<header class="sticky top-0 z-50 border-b border-border/60 bg-background/85 backdrop-blur-lg shadow-sm">
    <nav class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8"
         aria-label="Main navigation">

        <a href="#home" class="group flex items-center gap-2.5">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-br from-primary to-secondary text-white shadow-lg shadow-primary/20 transition-transform duration-300 group-hover:scale-105">
                <i class="fas fa-briefcase text-sm"></i>
            </span>
            <span class="text-lg font-bold tracking-tight">{{ $profile['name'] ?? 'Portfolio' }}</span>
        </a>

        <div class="hidden items-center gap-1 md:flex">
            @foreach ($navLinks as $link)
                <a href="{{ $link['href'] }}"
                   data-nav-link="{{ Str::after($link['href'], '#') }}"
                   class="rounded-full px-4 py-2 text-sm font-medium text-muted-foreground transition-colors duration-200 hover:bg-primary/10 hover:text-primary">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>

        <div class="flex items-center gap-1.5">
            <button id="menu-btn"
                    type="button"
                    aria-label="Open navigation menu"
                    aria-expanded="false"
                    aria-controls="mobile-menu"
                    class="flex h-10 w-10 items-center justify-center rounded-full text-muted-foreground transition-colors duration-200 hover:bg-primary/10 hover:text-primary md:hidden">
                <i class="fas fa-bars" id="menu-btn-icon"></i>
            </button>
        </div>
    </nav>

    <div id="mobile-menu" class="hidden border-t border-border/60 bg-background/95 backdrop-blur-lg md:hidden">
        <div class="flex flex-col gap-1 px-4 py-3 sm:px-6">
            @foreach ($navLinks as $link)
                <a href="{{ $link['href'] }}"
                   data-nav-link="{{ Str::after($link['href'], '#') }}"
                   class="rounded-xl px-4 py-3 text-sm font-medium text-muted-foreground transition-colors duration-200 hover:bg-primary/10 hover:text-primary">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</header>