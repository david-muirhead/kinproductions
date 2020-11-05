<?php 
$images = get_field('images');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>
    <div class="slider-wrapper relative">
      @forelse($images as $image)
          <span class="card-img-top bg-contain h-full w-full bg-center bg-no-repeat" style="background-image: url('{{$image['url']}}'); " alt="{{$image['alt']}}"></span>
      @empty
        <li class="alert alert-danger">No Images</li>
      @endforelse
</div>
<?php endif; ?>
