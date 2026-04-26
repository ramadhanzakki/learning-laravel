<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <article class="max-w-3xl mb-10 pb-8 border-b border-slate-700/50">
        <h2 class="text-2xl font-bold text-gray-100 mb-2 hover:text-indigo-400 transition-colors duration-200 cursor-pointer">
            {{ $blog['blogTitle'] }}
        </h2>
        <div class="text-sm text-slate-400 mb-4">
            <a href="#" class="font-medium text-slate-300 hover:text-indigo-400 transition-colors duration-200">{{ $blog['author'] }}</a> 
            <span class="mx-1">|</span> 
            <time datetime="2026-04-26">26 April 2026</time>
        </div>
        <p class="text-slate-300 leading-relaxed mb-5">
            {{ $blog['body'] }}
        </p>
        <a href="/blog" class="inline-flex items-center text-sm font-semibold text-indigo-400 hover:text-indigo-300 transition-colors duration-200 group">
            <span class="ml-1 transition-transform duration-200 group-hover:-translate-x-1">&laquo;</span>
            Read More 
        </a>
    </article>

</x-layout>