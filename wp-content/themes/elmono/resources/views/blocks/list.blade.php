{{--
  Title: List
  Description: List with dots
  Category: shared
  Icon: dashicons-editor-ul
  Keywords: list dots
  Mode: auto
  Align: left
  PostTypes: page post
  SupportsAlign: center
  SupportsMode: true
  SupportsMultiple: true
--}}

@php 
    $block_has_content = has_fields_content(get_fields());

    $options = get_field('options');
    $bg = $options['background'];
    $offset = $options['offset'];
@endphp

@if(!$block_has_content && is_admin()) 
    @include('partials.empty-block')
@elseif($block_has_content)
<section class="block-list section {{ $bg }} {{ text_color($bg) }} {{ $offset ? 'section--offset' : '' }}">
  <div class="container">
    <header class="section__header my-5 text-center">
      @hasfield('title') <h2 class="section-title"> @field('title') </h2> @endfield
      @hasfield('content') <p class="section-content"> @field('content') </p> @endfield
      @hasfield('subtitle') <h3 class="section-subtitle"> @field('subtitle') </h2> @endfield
    </header>
    @hasfield('list')
    <ul class="my-5 row list-unstyled my-n-1">
      @fields('list')
      <li class="item d-flex py-1 col-md-6 pl-0 pl-md-10">
        <span class="dot mr-1" style="background-color: @sub('color');"></span>@sub('text')
      </li>
      @endfields
    </ul>
    @endfield
  </div>
</section>
@endif
