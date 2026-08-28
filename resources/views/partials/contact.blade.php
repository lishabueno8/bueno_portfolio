<section id="contact" class="scroll-mt-20 bg-surface/60">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 md:py-28 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-2 lg:gap-16">
            <div>
                <span class="text-xs font-semibold uppercase tracking-widest text-primary">Contact</span>
                <h2 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-4xl">
                    Let&rsquo;s build something together
                </h2>
                <p class="mt-4 text-base leading-relaxed text-muted-foreground">
                    Have a project in mind, a question, or just want to say hi? My inbox is always open — I&rsquo;ll get back to you as soon as I can.
                </p>

                <div class="mt-8 space-y-4">
                    <a href="mailto:{{ $profile['email'] }}" class="group flex items-start gap-4">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-border/60 bg-background transition-colors duration-300 group-hover:border-primary/40">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                        </span>
                        <span>
                            <span class="block text-sm font-medium text-muted-foreground">Email</span>
                            <span class="block text-sm font-semibold transition-colors duration-300 group-hover:text-primary">{{ $profile['email'] }}</span>
                        </span>
                    </a>

                    <a href="tel:+639287334584" class="group flex items-start gap-4">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-border/60 bg-background transition-colors duration-300 group-hover:border-primary/40">
                            <i class="fas fa-phone" aria-hidden="true"></i>
                        </span>
                        <span>
                            <span class="block text-sm font-medium text-muted-foreground">Phone</span>
                            <span class="block text-sm font-semibold transition-colors duration-300 group-hover:text-primary">{{ $profile['phone'] }}</span>
                        </span>
                    </a>

                    <div class="flex items-start gap-4 rounded-xl p-2 transition-colors duration-300 hover:bg-primary/5">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-border/60 bg-background">
                            <i class="fas fa-location-dot" aria-hidden="true"></i>
                        </span>
                        <span>
                            <span class="block text-sm font-medium text-muted-foreground">Location</span>
                            <span class="block text-sm font-semibold">{{ $profile['location'] }}</span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl border border-border/60 bg-background p-6 shadow-lg shadow-black/5 transition-all duration-300 hover:-translate-y-1 hover:border-primary/40 hover:shadow-xl sm:p-8">
                <h3 class="text-lg font-bold">Send me a message</h3>
                <form id="contact-form" class="mt-6 space-y-4">
                    <div>
                        <label for="contact-name" class="mb-1.5 block text-sm font-medium text-muted-foreground">Name</label>
                        <input id="contact-name" name="name" type="text" required placeholder="Your name"
                               class="block w-full rounded-xl border border-border/60 bg-surface px-4 py-3 text-sm placeholder:text-muted-foreground/70 transition-colors duration-300 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/30">
                    </div>
                    <div>
                        <label for="contact-email" class="mb-1.5 block text-sm font-medium text-muted-foreground">Email</label>
                        <input id="contact-email" name="email" type="email" required placeholder="you@example.com"
                               class="block w-full rounded-xl border border-border/60 bg-surface px-4 py-3 text-sm placeholder:text-muted-foreground/70 transition-colors duration-300 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/30">
                    </div>
                    <div>
                        <label for="contact-message" class="mb-1.5 block text-sm font-medium text-muted-foreground">Message</label>
                        <textarea id="contact-message" name="message" rows="5" required placeholder="Tell me about your project..."
                                  class="block w-full resize-none rounded-xl border border-border/60 bg-surface px-4 py-3 text-sm placeholder:text-muted-foreground/70 transition-colors duration-300 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/30"></textarea>
                    </div>
                    <button type="submit"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-primary px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-primary/25 transition-all duration-300 hover:-translate-y-0.5 hover:bg-primary/90">
                        Send Message
                        <i class="fas fa-paper-plane text-sm" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>