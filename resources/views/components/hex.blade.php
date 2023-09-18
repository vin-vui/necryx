@props(['image', 'stroke' => 0, 'width' => null, 'classes' => null])

<svg class="hexagon-mask {{ $classes }}" viewBox="0 0 560 645" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
    <g>
        <clipPath id="hex-mask">
            <polygon points="270,0 0,160 0,485 270,645 560,485 560,160"></polygon>
        </clipPath>
    </g>
    <image clip-path="url(#hex-mask)" height="100%" width="100%" xlink:href="{{ $image }}" preserveAspectRatio="xMidYMin slice"></image>
    <polygon clip-path="url(#hex-mask)" points="270,0 0,160 0,485 270,645 560,485 560,160" stroke="{{ $stroke }}" stroke-width="{{ $width }}" fill="none" height="100%" width="100%" preserveAspectRatio="xMidYMin slice"></polygon>
</svg>
