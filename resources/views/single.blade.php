@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row mb-32">
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
</div>
@endsection
