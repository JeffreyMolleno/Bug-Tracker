<x-dashboard>
    <div id="data-table-container" class="flex justify-center mt-10">
        <div id="main-table-header-container"
            class="px-12 py-5 rounded-t-lg shadow-sm flex justify-between items-center"
            style="width: 70rem; background-color: #F1F1F1;">
            <input type="text" name="search" id="search"
                class="rounded-full appearance-none border border-gray-400 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required>

            <div id="left-options-container">
                <button onclick="toggleModal(['modal-container-flag-new-bug','modal-bg']);"
                    class="text-gray-700 hover:text-gray-900 focus:outline-none focus:shadow-outline appearance-none">FLAG
                    NEW BUG</button>
            </div>
        </div>
    </div>

    <x-modals.for-bugs />

</x-dashboard>
