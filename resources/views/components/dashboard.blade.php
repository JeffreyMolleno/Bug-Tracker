<x-master>
    <div class="topbar-container">
        <div class="topbar flex justify-between items-center w-full py-5" style="background-color: #046FBC;">
            <div id="title" class="ml-20">
                <a href="#" class="text-lg text-white cursor-pointer">< BUG TRACKER \></a>
            </div>
            <div id="options" class="mr-20 flex items-center justify-between" style="width: 12rem;">
                <button class="text-sm text-gray-300 hover:text-white">Profile</button>
                <button class="text-sm text-gray-300 hover:text-white">Notifications</button>
            </div>
        </div>
    </div>

    <div class="body-container">
        {{$slot}}
    </div>
</x-master>
