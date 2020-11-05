@extends('layouts.app')

@section('content') 
  @while (have_posts()) @php the_post() @endphp
    <div class="content-xl flex pb-24">
      <article class="w-full md:w-4/6 pr-12 border-r">
      @thumbnail('full')
        <div class="entry-content w-full md:w-4/5 float-right md:pl-0 md:pt-10 pr-10">
          @php
            @the_content() 
          @endphp
        </div>
      </article>
      <div class="w-full hidden md:block md:w-2/6 pr-16 h-full md:sticky md:top-0">
        <div class="border-l border-black pl-16 py-10">
          <h4 class="uppercase font-semibold">@category</h4>
          <p class="py-2 italic">
            @php
              the_date( 'd F' );
            @endphp
          </p>
          <h1 class="font-semibold">@title()</h1>
          <p class="italic pt-4 pb-10 ">@field('credits')</p>
          <p>@field('blurb')</p>
        </div>
      </div>
    </div>
  @endwhile
@endsection
