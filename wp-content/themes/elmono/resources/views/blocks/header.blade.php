{{--
  Title: Header
  Description: Page header
  Category: header
  Icon: admin-comments
  Keywords: testimonial quote
  Mode: auto
  Align: left
  PostTypes: page post
  SupportsAlign: center
  SupportsMode: true
  SupportsMultiple: true
--}}

@php 
    $block_has_content = has_fields_content(get_fields());
@endphp

@if(!$block_has_content && is_admin()) 
    @include('partials.empty-block')
@elseif($block_has_content)
<header class="header vh-100 text-center">
    @hasfield('image')
        @php $image_id = get_field('image'); @endphp
        {!! image($image_id,'full','header__image img-fluid') !!}
    @endfield
    <div class="container h-100">
        <div class="header-inner d-flex justify-content-center align-items-center flex-column h-100">
            <h1 class="page-header pb-5">
                @field('title')
            </h1>
            @hasfield('link')
            <a class="btn btn-primary btn-rounded" href="@field('link', 'url')" role="button">
                @field('link', 'title')
            </a>
            @endfield
            <button class="header__arrow btn-primary mx-auto"></button>
        </div>
    </div>
</header>
@endif
