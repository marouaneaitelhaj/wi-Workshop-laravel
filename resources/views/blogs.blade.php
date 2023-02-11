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
<form action="{{url('store')}}" method="post">
  @csrf
  <input
    type="text"
    name="title"
    placeholder="title"
    class="w-full rounded-md border-gray-200 py-2.5 pr-10 shadow-sm sm:text-sm"
  />
  <input
    type="text"
    name="content"
    placeholder="content"
    class="w-full rounded-md border-gray-200 py-2.5 pr-10 shadow-sm sm:text-sm"
  />

    <button
      type="submit"
      class="rounded-full bg-rose-600 p-0.5 text-white hover:bg-rose-700"
    >
    <span>Add</span>
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
@foreach ($blogs as $blog)
<article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
 

  <div class="bg-white p-4 sm:p-6">
    <time datetime="2022-10-10" class="block text-xs text-gray-500">
      {{$blog->created_at}}
    </time>

    <a href="#">
      <h3 class="mt-0.5 text-lg text-gray-900">
        {{$blog->title}}
      </h3>
    </a>

    <p class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3">
      {{$blog->content}}
    </p>
  </div>
  <p>{{$blog->name}}</p>
</article>
@endforeach

</body>
</html>