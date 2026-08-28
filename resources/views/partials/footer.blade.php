<footer class="border-t border-border/60">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">
            <div class="lg:col-span-2">
                <a href="#home" class="flex items-center gap-2.5">
                    <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-br from-primary to-secondary text-white shadow-lg shadow-primary/20">
                        <i class="fas fa-briefcase text-xs" aria-hidden="true"></i>
                    </span>
                    <span class="text-lg font-bold tracking-tight">{{ $profile['name'] }}</span>
                </a>
                <p class="mt-4 max-w-md text-sm leading-relaxed text-muted-foreground">
                    {{ $profile['tagline'] }} Based remotely, building for the world.
                </p>

                <div class="mt-6 flex gap-3">
                    @foreach ($socials as $social)
                        <a href="{{ $social['href'] }}"
                           target="_blank"
                           rel="noopener"
                           aria-label="{{ $social['label'] }}"
                           class="flex h-10 w-10 items-center justify-center rounded-full border border-border/60 bg-surface text-muted-foreground transition-all duration-300 hover:-translate-y-1 hover:border-primary/40 hover:text-primary">
                            @if ($social['icon'] === 'github')
                                <i class="fab fa-github" aria-hidden="true"></i>
                            @elseif ($social['icon'] === 'linkedin')
                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                            @elseif ($social['icon'] === 'twitter')
                                <i class="fab fa-x-twitter" aria-hidden="true"></i>
                            @elseif ($social['icon'] === 'facebook')
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            @elseif ($social['icon'] === 'telegram')
                                <i class="fab fa-telegram" aria-hidden="true"></i>
                            @elseif ($social['icon'] === 'tiktok')
                                <i class="fab fa-tiktok" aria-hidden="true"></i>
                            @elseif ($social['icon'] === 'discord')
                                <i class="fab fa-discord" aria-hidden="true"></i>
                            @elseif ($social['icon'] === 'mail')
                                <i class="fas fa-envelope" aria-hidden="true"></i>
                            @elseif ($social['icon'] === 'gmail')
                                <i class="fab fa-google" aria-hidden="true"></i>
                            @else
                                <i class="fas {{ $social['icon'] }}" aria-hidden="true"></i>
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>

            <div>
                <h3 class="text-sm font-bold uppercase tracking-widest text-muted-foreground">Quick Links</h3>
                <ul class="mt-4 space-y-2.5">
                    @foreach ($navLinks as $link)
                        <li>
                            <a href="{{ $link['href'] }}" class="inline-flex items-center gap-2 text-sm text-muted-foreground transition-colors duration-200 hover:text-primary">
                                <i class="fas {{ $link['icon'] }} w-4 text-center text-xs" aria-hidden="true"></i>
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-bold uppercase tracking-widest text-muted-foreground">Get in touch</h3>
                <ul class="mt-4 space-y-2.5 text-sm text-muted-foreground">
                    <li>
                        <a href="mailto:{{ $profile['email'] }}" class="inline-flex items-center gap-2 transition-colors duration-200 hover:text-primary">
                            <i class="fas fa-envelope text-xs" aria-hidden="true"></i>
                            {{ $profile['email'] }}
                        </a>
                    </li>
                    <li>
                        <a href="tel:+639287334584" class="inline-flex items-center gap-2 transition-colors duration-200 hover:text-primary">
                            <i class="fas fa-phone text-xs" aria-hidden="true"></i>
                            {{ $profile['phone'] }}
                        </a>
                    </li>
                    <li class="inline-flex items-center gap-2">
                        <i class="fas fa-location-dot text-xs" aria-hidden="true"></i>
                        {{ $profile['location'] }}
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-12 flex flex-col items-center justify-between gap-4 border-t border-border/60 pt-8 sm:flex-row">
            <p class="text-sm text-muted-foreground">&copy; {{ date('Y') }} {{ $profile['name'] }}. All rights reserved.</p>
            <a href="{{ $profile['github'] }}"
               target="_blank"
               rel="noopener"
               class="inline-flex items-center gap-2 text-sm font-semibold text-muted-foreground transition-colors duration-200 hover:text-primary">
                <i class="fab fa-github" aria-hidden="true"></i>
                GitHub Profile
            </a>
        </div>
    </div>
</footer>