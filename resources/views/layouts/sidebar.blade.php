<div class="flex flex-col w-64 h-screen bg-white border-r border-gray-200 fixed">
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
