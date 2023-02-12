<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

    <div class="relative">
        <form action="{{ url('update/' . $blogs->id) }}" method="post">
            @csrf
            <input type="text" value="{{ $blogs->title }}" name="title" placeholder="title"
                class="w-full rounded-md border-gray-200 py-2.5 pr-10 shadow-sm sm:text-sm" />
            <input type="text" value="{{ $blogs->content }}" name="content" placeholder="content"
                class="w-full rounded-md border-gray-200 py-2.5 pr-10 shadow-sm sm:text-sm" />

            <button type="submit" class="rounded-full bg-rose-600 p-0.5 text-white hover:bg-rose-700">
                <span>Edit</span>
            </button>
        </form>
    </div>

    <!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

    <!--
  This component uses @tailwindcss/line-clamp

  yarn add @tailwindcss/line-clamp
  npm install @tailwindcss/line-clamp

  plugins: [require('@tailwindcss/line-clamp')]
-->


</body>

</html>
