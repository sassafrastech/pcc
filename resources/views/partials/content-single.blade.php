<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{!! App::title() !!}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content" id="content">
    @content
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'pcc'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>