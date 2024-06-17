<!doctype html>
<html lang="en">
	@include('layouts.head')
	<body class="bg-light">
		<div id="db-wrapper">
            @include('layouts.slidebar')
			<main id="page-content">
				@include('layouts.header')
				@yield('content')
			</main>
		</div>
		@include('layouts.footer')
		@include('layouts.script')
	</body>
</html>
