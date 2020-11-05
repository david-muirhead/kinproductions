@extends('layouts.app')

@section('content')
  <div class="container-xl flex relative">
    <div class="w-full md:w-1/2 mt-10 pr-8">
      @while (have_posts()) @php the_post() @endphp
      <a href="@permalink" perm-data="@thumbnail('large', false)" class="archive-link w-full block border-b border-black first:border-t  px-2 pt-3 pb-2 font-akz tracking-wide"><h2 class="entry-title text-4xl uppercase hover:text-peach-420 mb-0">@title</h2></a>
      @endwhile
    </div>
    <span class="pl-6 image-change h-0 mt-64 md:mt-0 pb-64 md:pb-archive absolute top-0 right-0 w-64 md:w-1/2 bg-cover bg-center"></div>
  </div>  
@endsection
