@vite('resources/css/app.css')

<div class="w-full bg-slate-900">
    <div class="flex bg-slate-900 h-screen">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
            <div>
                <h2 class="text-3xl font-bold text-slate-100 md:text-4xl">{{$post->title}}</h2>
                <p class="mt-2 text-sm text-gray-400 md:text-base">{{$post->description}}</p>
                <p class="mt-2 text-sm text-gray-200 md:text-base">{{$post->content}}</p>
                <div class="flex justify-center lg:justify-start mt-6">
                    <a class="px-4 py-3 bg-slate-500 text-gray-200 text-lg font-semibold rounded hover:bg-slate-600" href="/post/preview">Back</a>
                </div>
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
            <div class="h-full object-cover">
                <div class="h-full bg-black flex flex-row">
                    <img src="{{ asset('images/' . $post->image) }}"
                                class="w-full rounded-t-lg md:rounded-tr-none md:rounded-bl-lg" />
                </div>
            </div>
        </div>
    </div>
</div>