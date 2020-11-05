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

@section('svg')
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 356.6 356.6" aria-hidden="true" width="400" id="site-circle" class="z-20"><defs><radialGradient id="a" cx="178.3" cy="178.3" r="178.3" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#130c0e"/><stop offset="0" stop-color="#221716"/><stop offset="0" stop-color="#4a352c"/><stop offset="0" stop-color="#8a644f"/><stop offset="0" stop-color="#e2a57f"/><stop offset="0" stop-color="#f6b48a"/><stop offset=".76" stop-color="#f6b48a" stop-opacity=".3"/><stop offset=".76" stop-color="#f6b48a" stop-opacity=".29" id="myOffset"/><stop offset=".83" stop-color="#f6b48a" stop-opacity=".17"/><stop offset=".89" stop-color="#f6b48a" stop-opacity=".07"/><stop offset=".95" stop-color="#f6b48a" stop-opacity=".02"/><stop offset="1" stop-color="#f6b48a" stop-opacity="0"/></radialGradient></defs><path d="M178.3 356.6A178.3 178.3 0 100 178.3a178.3 178.3 0 00178.3 178.3" fill="url(#a)"/></svg> 
@endsection

