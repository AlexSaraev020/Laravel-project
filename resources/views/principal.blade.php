<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-900">
    <div class="w-full h-screen flex items-center justify-center">
        <div class="text-center">
            <h1 class="mb-4 text-3xl font-extrabold text-white md:text-5xl lg:text-6xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-slate-400 from-slate-600">InstaShot</span>
                Social APP
            </h1>
            <p class="text-lg font-normal text-gray-400 lg:text-xl ">
                The newest and most revolutionary social media application in the world.
            </p>
            <div class="mt-10">
                <a href="{{route('post.create')}}"
                    class="text-white bg-slate-500 font-medium rounded-lg text-xl px-5 py-2.5 text-center mr-2 mb-2">Create
                    a Post</a>
                <a href="{{route('post.preview')}}"
                    class="bg-slate-100 text-slate-700 font-bold rounded-lg text-xl px-5 py-2.5 text-center mr-2 mb-2">Preview
                    Posts</a>
            </div>
        </div>
    </div>
</body>

</html>
