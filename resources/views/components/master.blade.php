<!DOCTYPE html>
<html>
<head>
	<title>Blogging Platform</title>
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/solid.min.js" integrity="sha256-JoCB3vT7DUEBtHyKsyjHG/0ab3slcq2L6QnrKf3yO1A=" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/fontawesome.min.js" integrity="sha256-7zqZLiBDNbfN3W/5aEI1OX/5uvck9V0yhwKOA9Oe49M=" crossorigin="anonymous"></script>

    {{-- TinyMce --}}
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	
	<!-- Sharethis social -->
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5e9206b5313ffe00134d0be7&product=inline-share-buttons" async="async"></script>
</head>
<body class="bg-gray-200">
	{{ $slot }}
</body>
</html>