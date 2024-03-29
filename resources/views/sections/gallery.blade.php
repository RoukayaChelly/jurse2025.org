<section id="gallery" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Gallery</h2>
      <p>Check our gallery from the recent events</p>
    </div>
  </div>
  @foreach($galleries as $gallery)
    <div class="owl-carousel gallery-carousel">
      @foreach($gallery->photos as $photo)
        <a href="{{ asset($photo->getUrl()) }}" class="venobox" data-gall="gallery-carousel">
          <img src="{{ asset($photo->getUrl()) }}" alt="{{ $gallery->name }}" title="{{ $gallery->name }}">
        </a>
      @endforeach
    </div>
  @endforeach
</section>
