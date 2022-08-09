  <!-- BEGIN: Breadcrumb -->
  <div class="-intro-x breadcrumb ml-auto hidden sm:flex"> <a href="{{route('home')}}">سانا</a>
    <i data-feather="chevron-left" class="breadcrumb__icon"></i>
    @foreach ( $breadcrumb as $item)
        <a href="" class="breadcrumb--active">{{ $item ?? ''  }}</a>
    @endforeach

</div>
  <!-- END: Breadcrumb -->
