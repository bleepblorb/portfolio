@extends('base')

@section('app')
  <div id="resume" class="edit-mode">
    <div class="resume__editor">
      @include('resume__editor')
    </div>
    <div class="resume__content">
      @include('resume__content')
      <button class="edit-btn btn btn-secondary"> edit </button>
    </div>
  </div>

@endsection

@push('scripts')
  <script>
    $(function() {
      $('.edit-btn').on('click', function() {
          $('#resume').toggleClass('edit-mode');
      });

      $('.editor__section__dots li').on('click', function() {
        $('.editor__section__dots li').removeClass('-active');
        $(this).addClass('-active');
      });

      $('.resume__editor__content .btn').on('click', function(){
        $('.editor__next-btn').addClass('-active');
        $('.editor__next-btn').removeClass('-disabled');
        $('.editor__next-btn').removeClass('-closing');
        $('.resume__editor__content .btn').removeClass('-selected');
        $(this).addClass('-selected');
      });

      $('.editor__next-btn').on('click', function(){
        $(this).removeClass('-active');
        $(this).addClass('-disabled');
        $(this).addClass('-closing');
        $(this).parents('.resume__editor').find('.editor__question').first().addClass('-out');
        $(this).parents('.resume__editor').find('.editor__question').eq(1).removeClass('-incoming');

        $('.progress .progress-bar').removeClass('w-25').addClass('w-50');
      });
    });
  </script>
@endpush
