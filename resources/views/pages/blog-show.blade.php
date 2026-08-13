@extends('layouts.app')

@section('title', $post['title'])

@section('content')
    <div class="min-h-screen bg-litus-bg pb-20">
        <section class="relative h-[clamp(480px,55vh,620px)] overflow-hidden">
            <img src="{{ $post['hero'] }}" alt="{{ $post['title'] }}" class="absolute inset-0 h-full w-full object-cover">
            <div class="page-hero-overlay absolute inset-0"></div>

            <div class="absolute inset-0 flex items-center pt-[68px]">
                <div class="litus-container">
                    <div class="max-w-[720px] hero-copy-enter">
                        <nav class="mb-6 flex flex-wrap items-center gap-2">
                            @foreach([['label' => 'Home', 'route' => 'home'], ['label' => 'Blog', 'route' => 'blog']] as $crumb)
                                <span class="flex items-center gap-2">
                                    <a href="{{ route($crumb['route']) }}" class="text-[0.75rem] text-white/55 no-underline transition-colors hover:text-litus-accent">{{ $crumb['label'] }}</a>
                                    <span class="text-[0.7rem] text-white/30">/</span>
                                </span>
                            @endforeach
                            <span class="text-[0.75rem] font-semibold text-white/85">{{ $post['title'] }}</span>
                        </nav>

                        <div class="mb-[18px] inline-flex items-center gap-2">
                            <div class="h-0.5 w-7 bg-litus-accent"></div>
                            <span class="text-[0.65rem] font-bold tracking-[0.22em] text-litus-accent">{{ $post['tag'] }}</span>
                            <span class="text-[0.65rem] text-white/40">·</span>
                            <span class="text-[0.65rem] text-white/50">{{ $post['date'] }}</span>
                        </div>

                        <h1 class="m-0 text-[clamp(1.8rem,4.5vw,3.4rem)] leading-[1.12] font-black tracking-[-0.02em] text-white">
                            {{ $post['title'] }}
                        </h1>

                        <p class="mt-5 mb-0 max-w-[560px] text-base leading-[1.78] text-white/62">
                            {{ $post['excerpt'] }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="litus-container grid grid-cols-1 items-start gap-8 pt-10 lg:grid-cols-[1fr_320px]">
            <article>
                @foreach($post['body'] as $paragraph)
                    <p class="mb-[18px] text-[0.9rem] leading-[1.95] text-litus-muted">{{ $paragraph }}</p>
                @endforeach

                <blockquote class="my-8 rounded-r-xl border-l-4 border-litus-accent bg-white py-5 pr-7 pl-7 shadow-[0_2px_16px_rgba(14,23,59,0.06)]">
                    <p class="m-0 text-[0.95rem] leading-[1.7] font-bold text-litus-navy italic">
                        &ldquo;{{ $post['quote'] }}&rdquo;
                    </p>
                </blockquote>

                @foreach($post['body2'] as $paragraph)
                    <p class="mb-[18px] text-[0.9rem] leading-[1.95] text-litus-muted">{{ $paragraph }}</p>
                @endforeach

                <div class="mt-7 mb-7 flex flex-wrap items-center gap-2 border-t border-litus-navy/7 pt-5">
                    <x-litus-icon name="tag" class="h-3.5 w-3.5 text-[#b0bcd0]" />
                    @foreach($post['tags'] as $tag)
                        <span class="cursor-pointer rounded-full bg-litus-surface px-3 py-1 text-[0.7rem] font-semibold text-litus-muted transition-all hover:bg-litus-accent hover:text-white">{{ $tag }}</span>
                    @endforeach
                </div>

                <div class="litus-card mb-9 flex items-start gap-5 rounded-2xl px-6 py-6">
                    <img
                        src="{{ $post['author']['avatar'] }}"
                        alt="{{ $post['author']['name'] }}"
                        class="h-[70px] w-[70px] shrink-0 rounded-full border-[3px] border-litus-surface object-cover"
                    >
                    <div>
                        <div class="mb-0.5 text-[0.9rem] font-extrabold text-litus-navy">{{ $post['author']['name'] }}</div>
                        <div class="mb-2.5 text-[0.72rem] font-bold text-litus-accent">{{ $post['author']['role'] }}</div>
                        <p class="m-0 text-[0.8rem] leading-[1.72] text-litus-muted">{{ $post['author']['bio'] }}</p>
                    </div>
                </div>

                <div class="mt-7 grid grid-cols-1 gap-4 sm:grid-cols-2">
                    @if($prev)
                        <a href="{{ route('blog.show', $prev['slug']) }}" class="litus-card flex flex-col gap-1.5 rounded-2xl px-5 py-[18px] no-underline transition-shadow hover:shadow-[0_8px_32px_rgba(6,182,212,0.14)]">
                            <div class="flex items-center gap-1.5 text-[0.7rem] font-bold text-[#b0bcd0]">
                                <x-litus-icon name="arrow-left" class="h-3 w-3" />
                                PREV POST
                            </div>
                            <div class="text-[0.82rem] leading-[1.35] font-bold text-litus-navy">{{ $prev['title'] }}</div>
                        </a>
                    @else
                        <div></div>
                    @endif

                    @if($next)
                        <a href="{{ route('blog.show', $next['slug']) }}" class="litus-card flex flex-col items-end gap-1.5 rounded-2xl px-5 py-[18px] text-right no-underline transition-shadow hover:shadow-[0_8px_32px_rgba(6,182,212,0.14)]">
                            <div class="flex items-center gap-1.5 text-[0.7rem] font-bold text-[#b0bcd0]">
                                NEXT POST
                                <x-litus-icon name="arrow-right" class="h-3 w-3" />
                            </div>
                            <div class="text-[0.82rem] leading-[1.35] font-bold text-litus-navy">{{ $next['title'] }}</div>
                        </a>
                    @endif
                </div>
            </article>

            <x-blog.sidebar :current-slug="$post['slug']" />
        </div>
    </div>
@endsection
