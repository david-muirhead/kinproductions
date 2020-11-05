@extends('layouts.app')

@section('content') 
  @while (have_posts()) @php the_post() @endphp
    <div class="content-xl  flex pb-24">
      <article class="w-full flex flex-col md:flex-row md:pr-12 border-r">
        <div class="order-2 md:order-1 entry-content w-full md:w-4/5 md:pl-0 md:pr-10">
          <span class="pb-10 hidden md:block">@thumbnail('full')</span>
          @php
            @the_content() 
          @endphp
        </div>
        <div class="order-1 md:order-2 w-full md:block md:w-2/6 md:pr-16 h-full">
          <div class="flex flex-col md:border-l md:border-black md:pl-16 py-10 md:sticky md:top-0">
            <span class="pb-10 block md:hidden">@thumbnail('full')</span>
            <h4 class="uppercase font-semibold">@category</h4>
            <p class="py-2 italic">
              @php
                the_date( 'd F' );
              @endphp
            </p>
            <h1 class="font-semibold">@title()</h1>
            <p class="w-3/4 md:w-full pt-4 md:pb-10 ">
              @field('blurb')
            </p>
          </div>
        </div>
      </article>
    </div>
  @endwhile
@endsection
