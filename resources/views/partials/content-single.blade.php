<article class="w-full md:w-4/6 md:p-12 pt-0 md:pt-0 pl-0 border-r">
@thumbnail('large')
  <div class="w-full block md:hidden">
    <div class="py-10">
      <h1 class="font-semibold">@title</h1>
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
