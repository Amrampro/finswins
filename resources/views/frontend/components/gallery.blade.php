@php
$count = 1;
$maxCount = 12;
@endphp
<div class="gallery">
    <div class="gallery__inner">
        <div class="gallery__slider">
            @foreach($galleries??[] as $galerie)
                @break($count > $maxCount)
                @foreach($galerie->getImagesUrl() as $image)
                    @php($count+=1)
                    <div class="gallery__single">
                        <img src="{{$image}}" alt="Image" loading="lazy" >
                        <a href="#">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                @endforeach

            @endforeach

        </div>
    </div>
</div>
