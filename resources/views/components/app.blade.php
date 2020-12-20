@include('partial._header')
@include('partial._navbar')

<body>
  {{-- start of content --}}
  <main id="content" class="mt-3">
    {{ $slot }}
  </main>
  {{-- end content --}}

  @include('partial._footer')

</body>
</html>
