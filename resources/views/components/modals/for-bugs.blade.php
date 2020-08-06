<div onclick="toggleModal(['modal-container-flag-new-bug','modal-bg']);" id="modal-bg"
    style="display:none; width:100%;height:100vh;position:fixed;top:0;left:0;background-color:grey; opacity:0.4;">
</div>
<div id="modal-container-flag-new-bug"
    style="display: none; width: 53rem; padding-top: 20px; padding: 20px; position: fixed; top: calc(50% - 18.5rem); left: calc(50% - 26rem); background-color:white; overflow:scroll;height:76vh;">
    <div id="modal-title" class="flex justify-center items-center">
        <h1 class="block text-gray-700 text-sm font-bold mb-2">Flag New Bug</h1>
    </div>
    <hr class="m-5" />

    <div id="modal-form-container">
        <form id="add-new-bug-form" action="{{ route('report.bug') }}" method="post" class="mt-5 px-10" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="subject" class="block text-gray-700 text-sm font-bold mb-2">Subject</label>
                <input type="text" name="subject" id="subject"
                    class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>

                @error('subject')
                <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="project" class="block text-gray-700 text-sm font-bold mb-2">Project</label>
                <input type="text" name="project" id="project"
                    class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>

                @error('project')
                <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="body"
                    class="block text-gray-700 text-sm font-bold mb-2">Body</label>

                <label style="cursor: pointer;" for="body" class="custom-file-upload">Body</label>
                <input type="text" name="body" id="body">

                <div id="body-custom-textarea"
                    class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" cols="30" rows="10" contenteditable="true" >
                </div>
                <div id="file-uploader" class="ml-2">
                    <label style="cursor: pointer;" for="file-upload" class="custom-file-upload">
                        <img src="{{ asset('images/icons/file-upload.svg') }}" alt="Upload File">
                    </label>
                    <input style="display: none;" id="file-upload" type="file" onchange="uploadImage(this)" />
                </div>

                {{-- @error('body')
                <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror --}}
            </div>

            <div class="m-8">
                <button
                    onclick="processBugPost()"
                    type="button"
                    class="text-sm text-white bg-blue-600 w-full py-2 hover:bg-blue-700">Post</button>
            </div>

        </form>
    </div>
</div>
