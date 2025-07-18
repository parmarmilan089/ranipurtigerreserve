<div x-data="{ open: false }">
    <!-- Desktop Sidebar -->
    <div class="lg:fixed lg:flex flex-col w-64 h-screen bg-white border-r border-gray-200 hidden lg:block z-30">
        <div class="flex items-center justify-center h-16 border-b">
            <a href="{{ route('dashboard') }}">
                <x-dashboard-logo class="block h-9 w-auto fill-current text-gray-800" />
            </a>
        </div>
        <div class="flex-1 flex flex-col justify-start px-2 py-4">
            <div class="mb-4 px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Menu</div>
            <ul class="space-y-1">
                <li>
                    <x-nav-link :href="route('banner.index')" :active="request()->routeIs('banner.*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                        {{ __('Banner') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('info-section.index')" :active="request()->routeIs('info-section.*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                        {{ __('Info-section') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('about.form')" :active="request()->routeIs('about.form') || request()->is('about-section*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                        {{ __('About-section') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('attraction-section.index')" :active="request()->routeIs('attraction-section.*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                        {{ __('Attraction-section') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('event-section.index')" :active="request()->routeIs('event-section.*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                        {{ __('Event-section') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('photo-gallery.index')" :active="request()->routeIs('photo-gallery.*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                        {{ __('Photo-gallery') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('geographical-section.index')" :active="request()->routeIs('geographical-section.*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                        {{ __('Geographical-section') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('contact-forms.index')" :active="request()->routeIs('contact-forms.*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                        {{ __('Contact-forms') }}
                    </x-nav-link>
                </li>
            </ul>
            <div class="mt-8 border-t pt-4 px-4">
                <div class="flex items-center space-x-2 mb-2">
                    <span class="font-medium text-gray-800">{{ Auth::user()->name }}</span>
                </div>
                <ul class="space-y-1">
                    <li>
                        <x-nav-link :href="route('profile.edit')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                            {{ __('Profile') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                                {{ __('Log Out') }}
                            </x-nav-link>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Mobile menu button -->
    <div class="lg:hidden flex items-center h-16 px-4 bg-white border-b border-gray-200">
        <button @click="open = true" id="mobile-menu-button" class="text-gray-800 focus:outline-none">
            <!-- Hamburger icon -->
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
        <span class="ml-2 font-semibold">Menu</span>
    </div>
    <!-- Mobile Sidebar Drawer -->
    <div x-show="open" class="fixed inset-0 z-40 flex lg:hidden" style="display: none;">
        <div @click="open = false" class="fixed inset-0 bg-black bg-opacity-40" aria-hidden="true"></div>
        <div class="relative flex flex-col w-64 h-full bg-white border-r border-gray-200 z-50">
            <div class="flex items-center justify-between h-16 border-b px-4">
                <a href="{{ route('dashboard') }}">
                    <x-dashboard-logo class="block h-9 w-auto fill-current text-gray-800" />
                </a>
                <button @click="open = false" class="text-gray-800 focus:outline-none">
                    <!-- Close icon -->
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <div class="flex-1 flex flex-col justify-start px-2 py-4 overflow-y-auto">
                <div class="mb-4 px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Menu</div>
                <ul class="space-y-1">
                    <li>
                        <x-nav-link :href="route('banner.index')" :active="request()->routeIs('banner.*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                            {{ __('Banner') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('info-section.index')" :active="request()->routeIs('info-section.*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                            {{ __('Info-section') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('about.form')" :active="request()->routeIs('about.form') || request()->is('about-section*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                            {{ __('About-section') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('attraction-section.index')" :active="request()->routeIs('attraction-section.*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                            {{ __('Attraction-section') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('event-section.index')" :active="request()->routeIs('event-section.*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                            {{ __('Event-section') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('photo-gallery.index')" :active="request()->routeIs('photo-gallery.*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                            {{ __('Photo-gallery') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('geographical-section.index')" :active="request()->routeIs('geographical-section.*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                            {{ __('Geographical-section') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('contact-forms.index')" :active="request()->routeIs('contact-forms.*')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                            {{ __('Contact-forms') }}
                        </x-nav-link>
                    </li>
                </ul>
                <div class="mt-8 border-t pt-4 px-4">
                    <div class="flex items-center space-x-2 mb-2">
                        <span class="font-medium text-gray-800">{{ Auth::user()->name }}</span>
                    </div>
                    <ul class="space-y-1">
                        <li>
                            <x-nav-link :href="route('profile.edit')" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                                {{ __('Profile') }}
                            </x-nav-link>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-100 transition">
                                    {{ __('Log Out') }}
                                </x-nav-link>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
