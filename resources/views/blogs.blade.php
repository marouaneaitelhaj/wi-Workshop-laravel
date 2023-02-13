<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <a href="logout">LOGOUT</a>
    <div class="w-full max-w-sm mx-auto">
        <form action="{{ url('store') }}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="title">
                    Title
                </label>
                <input name="title"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="title" type="text" placeholder="Enter blog title here" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="content">
                    Content
                </label>
                <textarea name="content"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="content" rows="5" placeholder="Enter blog content here"></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Publish
                </button>
            </div>
        </form>
    </div>
    <div class="w-full max-w-sm mx-auto">

        <h2 class="text-lg font-bold mb-4">Blog List</h2>
    </div>
    @foreach ($blogs as $blog)
        <div class="w-full max-w-sm mx-auto">

            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @php
                    if (session('user') == $blog->name) {
                        echo '<a href="edit/' . $blog->id . '">Edit Blog</a>';
                    }
                @endphp
                <div class="mb-4">
                    <div class="border-b pb-4 mb-4">
                        <p class="text-gray-700 mb-2">Date of Release: {{ $blog->created_at }}</p>
                        <p class="text-gray-700 mb-2">Author: {{ $blog->name }}</p>
                        <h4 class="text-sm font-medium mb-2">Title: {{ $blog->title }}</h4>
                        <p class="text-gray-700">Content: {{ $blog->content }}</p>
                    </div>
                </div>
                @php
                    if (session('user') == $blog->name) {
                        echo '<a href="destroy/' . $blog->id . '">Delete this one</a>';
                    }
                @endphp
            </div>
        </div>
    @endforeach


</body>

</html>
