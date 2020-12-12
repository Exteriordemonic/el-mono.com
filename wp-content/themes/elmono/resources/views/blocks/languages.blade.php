{{--
  Title: Languages List
  Description: Languages List
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
<section class="block-languages section {{ $bg }} {{ text_color($bg) }} {{ $offset ? 'section--offset' : '' }}">
  <div class="container">
    <header class="section__header my-5 text-center">
      @hasfield('title') <h2 class="section-title"> @field('title') </h2> @endfield
      @hasfield('content') <p class="section-content"> @field('content') </p> @endfield
      @hasfield('subtitle') <h3 class="section-subtitle"> @field('subtitle') </h2> @endfield
    </header>
    @hasfield('languages')
    <ul class="my-5 row list-unstyled my-n-2">
      @fields('languages')
      <li class="item py-2 col-sm-6 col-md-4 text-center">
        <span class="d-block icon icon--big-image mb-2">
          @php $image_id = get_sub_field('image'); @endphp
          {!! image($image_id,'full', '') !!}
        </span>
        <h3 class="d-block lead @if(get_sub_field('bold') == 1) font-weight-bold @endif">
          @sub('text')
        </h3>
      </li>
      @endfields
    </ul>
    @endfield
  </div>
</section>
@endif
