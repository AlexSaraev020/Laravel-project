@vite('resources/css/app.css')

<div class="bg-slate-900 min-h-screen">
    <div class="container py-24 mx-auto md:px-6 bg-slate-900">
        @if (session()->has('success'))
            <div id="alert-additional-content-3"
                class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                role="alert">
                <div class="flex items-center mb-2">
                    <svg class="flex-shrink-0 w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium mb-1">{{ session()->get('success') }}</h3>
                </div>
                <div class="flex">
                    <button type="button" id="doneButton"
                        class="text-green-800 bg-transparent border border-green-800 hover:bg-green-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-green-600 dark:border-green-600 dark:text-green-400 dark:hover:text-white dark:focus:ring-green-800"
                        data-dismiss-target="#alert-additional-content-3" aria-label="Close">
                        Done!
                    </button>
                </div>
            </div>
        @endif

        <script>
            const doneButton = document.getElementById('doneButton');
            const alertDiv = document.getElementById('alert-additional-content-3');

            doneButton.addEventListener('click', function() {
                alertDiv.style.display = 'none';
            });
        </script>
        @foreach ($posts as $post)
            <section class="mb-32 text-center md:text-left ">
                <div
                    class="block rounded-lg bg-slate-700 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
                    <div class="flex flex-wrap items-center">
                        <div class="block w-full shrink-0 grow-0 basis-auto md:w-4/12 lg:flex">
                            <img src="{{ asset('images/' . $post->image) }}"
                                class="w-full rounded-t-lg md:rounded-tr-none md:rounded-bl-lg" />
                        </div>
                        <div class="w-full shrink-0 grow-0 basis-auto md:w-8/12">
                            <div class="px-6 py-12 md:px-12">
                                <h5 class="text-slate-100 font-bold text-5xl tracking-tight mb-2">{{ $post->title }}
                                </h5>
                                <p class="font-normal text-gray-400 mb-3">
                                    {{ $post->description }}</p>
                                <p class="font-sans text-gray-300 mb-3">
                                    @if (strlen($post->content) > 50)
                                        {{ substr($post->content, 0, 50) . '...' }}
                                    @else
                                        {{ $post->content }}
                                    @endif
                                </p>

                                <div class="flex h-10 justify-between">
                                    <a href="{{ route('post.readmore', $post) }}"
                                        class=" text-white bg-slate-900 hover:bg-slate-800 focus:ring-4 border-2 border-slate-400 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center">
                                        Read More
                                    </a>
                                    <div class="flex">
                                        <a href="{{ route('post.edit', $post->id) }}"
                                            class="text-white bg-slate-900 hover:bg-yellow-500 focus:ring-4 border-2 border-yellow-500 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center">
                                            Edit
                                        </a>
                                        <form action="{{ route('post.delete', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="ml-4 text-white bg-red-700 hover:bg-red-800 focus:ring-4 border-2 border-red-900 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill='#ffffff' width="24"
                                                    height="22" viewBox="0 0 24 24">
                                                    <path
                                                        d="M3 6v18h18v-18h-18zm5 14c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm4-18v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.315c0 .901.73 2 1.631 2h5.712z" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
        <div class="fixed left-4 bottom-10">
            <a href="/"
                class="w-14 h-14 rounded-full bg-slate-500 hover:bg-slate-600 text-white font-bold flex items-center justify-center">
                <svg class="mr-2" fill="#ffffff" height="40px" width="40px" id="Layer_1"
                    style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <polygon
                        points="64.5,256.5 256.5,448.5 256.5,336.5 448.5,336.5 448.5,176.5 256.5,176.5 256.5,64.5" />
                </svg>
            </a>
        </div>
    </div>

</div>
