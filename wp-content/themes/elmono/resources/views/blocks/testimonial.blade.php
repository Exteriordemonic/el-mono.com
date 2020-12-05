{{--
  Title: Testimonial
  Description: Customer testimonial
  Category: formatting
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
<section class="section my-5 py-5 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col">
                <blockquote class="{{ $block['classes'] }}">
                    <p> @field('testimonial')</p>
                    <cite>
                        <span>@field('author')</span>
                    </cite>
                </blockquote>
            </div>
        </div>
    </div>
</section>
@endif
