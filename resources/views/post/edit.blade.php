@vite('resources/css/app.css')

<!-- component -->
<div class="bg-slate-900 h-screen">
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-slate-900 border-2 border-slate-400 ">
                    <form method="POST" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data"> 
                        
                        @csrf
                        @method('PATCH')

                        <div class="flex bg-slate-700 items-center justify-center w-full">
                            <label for="file"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-slate-400 border-dashed rounded-lg cursor-pointer bg-slate-800  hover:bg-slate-600 ">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-slate-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-slate-400"><span class="font-semibold">Click to
                                            upload</span> or drag and drop</p>
                                    <p class="text-xs text-slate-400">SVG, PNG, JPG or GIF (MAX.
                                        800x400px)</p>
                                </div>
                                <input id="file" type="file" name="image" class="hidden" required/>
                            </label>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-300">Title <span class="text-red-500">*</span></label>
                            <input type="text" class="text-white rounded-lg border-2 bg-slate-800 border-slate-400 p-2 w-full"
                                name="title" id="title" value="{{$post->title}}" required>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-300">Description</label>
                            <input type="text" class="text-white rounded-lg bg-slate-800 border-2 border-slate-400 p-2 w-full"
                                name="description" id="description" value="{{$post->description}}" required>
                        </div>

                        <div class="mb-8">

                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Your
                                message</label>
                            <textarea id="message" name='content' rows="4"
                                class="text-white block p-2.5 w-full text-sm text-gray-900 bg-slate-800 rounded-lg border-2 border-slate-400 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Write your thoughts here..." required>{{$post->content}}</textarea>

                        </div>

                        <div class="flex p-1">
                            <button role="submit" class="mr-2 p-3 bg-slate-800 border-2 border-slate-400 text-white hover:bg-slate-400"
                                required>Update</button>
                            <a href="{{route('post.preview')}}" class="mx-2 p-3 bg-slate-800 border-2 border-slate-400 text-white hover:bg-slate-400"
                                required>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


