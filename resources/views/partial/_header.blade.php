<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ isset($title) ? 'Welcome' : $title }} | {{ config('app.name') }}</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @stack('css')
  <script src="{{ asset('plugins/jquery.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</head>

@stack('appconfig')
