<aside :class="{'flex': navMenuShown, 'hidden': !navMenuShown}" class="bg-indigo-1100 w-16 h-screen max-h-screen fixed md:flex flex-col justify-between z-50 shadow-dark">
    <div>
        <div class="h-16 flex justify-center items-center px-4">
            <a class="flex items-center text-indigo-500 no-underline" href="{{ url('/') }}">
                <x-logo :size="'w-6 h-6'" />
            </a>
        </div>
        <div class="text-gray-400">
            <div class="py-4">
                <a href="" class="flex flex-col items-center py-3 px-4" title="Projects">
                    <span class="bg-indigo-1300 p-2 rounded">
                        <x-heroicon-o-briefcase />
                    </span>
                </a>
                <a href="" class="flex flex-col items-center py-3 px-4" title="Teams">
                    <span class="bg-indigo-1300 p-2 rounded">
                        <x-heroicon-o-user-group />
                    </span>
                </a>
                <a href="" class="flex flex-col items-center py-3 px-4" title="Offices">
                    <span class="bg-indigo-1300 p-2 rounded">
                        <x-heroicon-o-office-building />
                    </span>
                </a>
            </div>
            @if (is_admin_route())
                <div class="py-4">
                    <a href="" class="flex flex-col items-center py-3 px-4" title="Users">
                        <span class="bg-indigo-1300 p-2 rounded">
                            <x-heroicon-o-user />
                        </span>
                    </a>
                    <a href="" class="flex flex-col items-center py-3 px-4" title="Permissions">
                        <span class="bg-indigo-1300 p-2 rounded">
                            <x-heroicon-o-lock-open />
                        </span>
                    </a>
                    <a href="" class="flex flex-col items-center py-3 px-4" title="Activities">
                        <span class="bg-indigo-1300 p-2 rounded">
                            <x-eva-activity-outline fill="currentColor" />
                        </span>
                    </a>
                    <a href="" class="flex flex-col items-center py-3 px-4" title="Settings">
                        <span class="bg-indigo-1300 p-2 rounded">
                            <x-heroicon-o-cog />
                        </span>
                    </a>
                </div>
            @else
            @endif
        </div>
    </div>
    <div class="text-gray-400">
        <a href="" class="flex flex-col items-center py-3 px-4" title="Notifications">
            <span class="bg-indigo-1300 p-2 rounded">
                <x-eva-bell-outline fill="currentColor" />
            </span>
        </a>
        <a href="" class="flex flex-col items-center py-3 px-4" title="Messages">
            <span class="bg-indigo-1300 p-2 rounded">
                <x-heroicon-o-chat />
            </span>
        </a>
        <div class="cursor-pointer mb-2 flex flex-col items-center py-3 px-4">
            <x-avatar :class="'w-8 h-8'" :url="url(auth()->user()->avatar)" />
        </div>
    </div>
</aside>