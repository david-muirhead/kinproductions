{{--
  Template Name: Front Page
--}}
@extends('layouts.app')

@section('acknowledge')
  <section id="aoc" class="z-30 flex justify-center">
    <span id="ack" class="container-xl flex items-center justify-items-center justify-center p-6">
      <div class="carrat w-full md:w-1/2">
        <p class="text-xl md:text-2xl px-8">KIN is an arts and justice organisation.
        Placeholder acknowledgement of Country text, its projects emphasise the connection between culture, community, employment and well-being.
        Operating out of Nipaluna / Hobart, Tasmania, KIN projects take place in our prisons, our communities and online. KIN values transparency about its processes and the primacy of First Nations and survivors voices.
        </p>
      </div>
    </span>
  </section>
@endsection

@section('svg')
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 356.6 356.6" aria-hidden="true" width="400" id="site-circle" class="z-20"><defs><radialGradient id="a" cx="178.3" cy="178.3" r="178.3" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#130c0e"/><stop offset="0" stop-color="#221716"/><stop offset="0" stop-color="#4a352c"/><stop offset="0" stop-color="#8a644f"/><stop offset="0" stop-color="#e2a57f"/><stop offset="0" stop-color="#f6b48a"/><stop offset=".76" stop-color="#f6b48a" stop-opacity=".3"/><stop offset=".76" stop-color="#f6b48a" stop-opacity=".29" id="myOffset"/><stop offset=".83" stop-color="#f6b48a" stop-opacity=".17"/><stop offset=".89" stop-color="#f6b48a" stop-opacity=".07"/><stop offset=".95" stop-color="#f6b48a" stop-opacity=".02"/><stop offset="1" stop-color="#f6b48a" stop-opacity="0"/></radialGradient></defs><path d="M178.3 356.6A178.3 178.3 0 100 178.3a178.3 178.3 0 00178.3 178.3" fill="url(#a)"/></svg> 
@endsection

@section('content')
<div class="image-back fixed w-screen h-screen top-0 left-0 z-neg pointer-events-none bg-center"></div>
    <div class="mt-20 container-xl z-40">
      <a id="work-list" href="/works" class="peachy w-full float-left border-t border-b border-black px-2 pt-3 pb-2 font-akz tracking-wide text-peach-420 md:text-black hover:text-peach-420"> 
        <h2 class="text-4xl uppercase inline-block uppercase w-1/4 float-left mb-0">Works</h2>
        <div class="pointer-events-none sliding hidden md:inline-block whitespace-no-wrap overflow-auto w-3/4 float-left">
          @query([
            'post_type' => 'work'
          ])
          @posts
            <h2 rel="preload" id="link-before-image" class=" link-before-image entry-title text-4xl uppercase inline-block text-peach-420 mb-0 mr-10" style-data="@hasfield('has_small_hero_image') bg-no-repeat @else bg-cover  @endfield" perm-data="'@hasfield('has_small_hero_image') @thumbnail('medium_large', false) @else @thumbnail('full', false) @endfield">@title</h2>
          @endposts
        </div>
      </a>
      <a id="book-list" href="/books" class="peachy w-full float-left px-2 pt-3 pb-2  font-akz tracking-wide text-peach-420 md:text-black hover:text-peach-420"> 
        <h2 class="text-4xl uppercase inline-block uppercase w-1/4 float-left mb-0">Books</h2>
        <div class="pointer-events-none sliding hidden md:inline-block whitespace-no-wrap overflow-auto w-3/4 float-left">
        @query([
          'post_type' => 'book'
        ])
        @posts
          <h2 id="link-before-image" class=" link-before-image entry-title text-4xl uppercase inline-block text-peach-420 mb-0 mr-10" style-data="@hasfield('has_small_hero_image') bg-no-repeat @else bg-cover  @endfield" perm-data="'@hasfield('has_small_hero_image') @thumbnail('medium_large', false) @else @thumbnail('full', false) @endfield">@title</h2>
        @endposts
        </div>
      </a>
      <a id="news-list" href="/news" class="peachy w-full float-left border-t border-b border-black px-2 pt-3 pb-2 font-akz tracking-wide peachy w-full float-left px-2 pt-3 pb-2  font-akz tracking-wide text-peach-420 md:text-black hover:text-peach-420 hover:text-peach-420"> 
        <h2 class="text-4xl uppercase inline-block uppercase w-1/4 float-left mb-0">News</h2>
        <div class="pointer-events-none sliding hidden md:inline-block whitespace-no-wrap overflow-auto w-3/4 float-left ">
        @query([
          'post_type' => 'post'
        ])
        @posts
        <h2 id="link-before-image" class=" link-before-image entry-title text-4xl uppercase inline-block text-peach-420 mb-0 mr-10" style-data="@hasfield('has_small_hero_image') bg-no-repeat @else bg-cover  @endfield" perm-data="'@hasfield('has_small_hero_image') @thumbnail('medium_large', false) @else @thumbnail('full', false) @endfield">@title</h2>
        @endposts
        </div>
        </a>
    </div>
@endsection