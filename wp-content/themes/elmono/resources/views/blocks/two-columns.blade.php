{{--
  Title: Two columns
  Description: Two column, image with text
  Category: shared
  Icon: admin-comments
  Keywords: image columns text content
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
    $direction = $options['direction'];
@endphp

@if(!$block_has_content && is_admin()) 
    @include('partials.empty-block')
@elseif($block_has_content)
<section class="section {{ $bg }} {{ text_color($bg) }} {{ $offset ? 'section--offset' : '' }}">
  <div class="container">
    <div class="row {{ $direction }} gx-5 gx-xl-10">
      <div class="col-md-6 section__offset">
        @hasfield('image')
          @php $image_id = get_field('image'); @endphp
          {!! image($image_id,'full','img-cover') !!}
        @endfield
      </div>
      <div class="col-md-6 py-5">
        @group('content')
          @hassub('content')
          <div class="default-content mb-4">
            @sub('content')
          </div>
          @endsub

          @hassub('link')
          <a class="btn {{ btn_color($bg) }}" href="@sub('link', 'url')" role="button">
              @sub('link', 'title')
          </a>
          @endsub
        @endgroup
      </div>
    </div>
  </div>
</section>
@endif
