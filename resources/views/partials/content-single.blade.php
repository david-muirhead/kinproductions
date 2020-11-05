<article class="w-full md:w-4/6 md:p-12 pt-0 pl-0 border-r">
  @include('partials.slider')
  <div class="w-full block md:hidden pl-6 md:pl-0  ">
    <div class="py-10">
      <h1 class="font-semibold">@field('extended_title')</h1>
      <p class="italic">@field('credits')</p>
      <p>@field('blurb')</p>
    </div>
  </div>
  <div class="entry-content w-full md:w-4/5 float-right  md:pt-20">
    @php the_content() @endphp
  </div>
</article>
<div class="w-full hidden md:block md:w-2/6 pr-16 h-screen md:sticky md:top-0">
  <div class="border-l border-black pl-16 py-10">
    <h1 class="font-semibold">@field('extended_title')</h1>
    <p class="italic pt-6 pb-10">@field('credits')</p>
    <p>@field('blurb')</p>
  </div>
</div>
