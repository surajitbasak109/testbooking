{{-- start of footer --}}
<footer id="footer" class="footer bg-theme py-3 text-white">
  <div class="container-fluid">
    <div class="row text-center text-lg-start">
      <div class="col-lg-6">
        &copy; Copyright 2020 <a href="{{ url('/') }}">{{ config('app.name') }}</a>
      </div>
      <div class="col-lg-6 text-center text-lg-end">
        Developed and designed by <a target="_blank" href="https://www.github.com/surajitbasak109">Surajit Basak</a>
      </div>
    </div>
  </div>
</footer>

@stack('js')
{{-- end of footer --}}
