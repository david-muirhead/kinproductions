@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="py-10 flex z-30">
      <span class="hidden md:block spacer w-1/6"></span>
      <span class="w-full md:w-3/6 border-b border-black pb-32  pr-8">
        @php the_content() @endphp
      </span>
    </div>
    <div id="contact" class="py-10 flex flex-col md:flex-row mt-0">
      <h1 class="font-semibold w-full md:w-1/6 text-peach-420 uppercase">Contact</h1>
      <p class="w-full md:w-3/6 border-b border-black pb-24 pt-16 pr-8">
        @field('contact')
          </br>
        <a href="mailto:@field('contact_link')">@field('contact_link')</a>
      </p>
    </div>
    <div class="py-10 flex flex-col md:flex-row my-64 mt-0">
      <h1 class="font-semibold w-full md:w-1/6 uppercase">Support</h1>
      <p class="w-full md:w-3/6 pb-24 pt-16 pr-8">
        @field('support')
      </p>
    </div>
  @endwhile
@endsection

@section('svg')
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 356.6 356.6" aria-hidden="true" width="400" id="site-circle" class="z-20"><defs><radialGradient id="a" cx="178.3" cy="178.3" r="178.3" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#130c0e"/><stop offset="0" stop-color="#221716"/><stop offset="0" stop-color="#4a352c"/><stop offset="0" stop-color="#8a644f"/><stop offset="0" stop-color="#e2a57f"/><stop offset="0" stop-color="#f6b48a"/><stop offset=".76" stop-color="#f6b48a" stop-opacity=".3"/><stop offset=".76" stop-color="#f6b48a" stop-opacity=".29" id="myOffset"/><stop offset=".83" stop-color="#f6b48a" stop-opacity=".17"/><stop offset=".89" stop-color="#f6b48a" stop-opacity=".07"/><stop offset=".95" stop-color="#f6b48a" stop-opacity=".02"/><stop offset="1" stop-color="#f6b48a" stop-opacity="0"/></radialGradient></defs><path d="M178.3 356.6A178.3 178.3 0 100 178.3a178.3 178.3 0 00178.3 178.3" fill="url(#a)"/></svg> 
@endsection

