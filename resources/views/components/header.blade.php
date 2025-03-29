<div>
	<header class="shadow-xl">
		<div class="flex justify-between max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
			<h1 class="text-2xl font-semibold text-primary">Balolong<span class="text-white">Inc.</span></h1>
			<div class="flex gap-2">
				@auth
					<a href="/v1/api/logout">
						<button class="btn btn-sm btn-primary">Logout</button>
					</a>
      	@else
					<a href="/login">
						<button class="btn btn-sm btn-outline btn-primary">Login</button>
					</a>
					<a href="/signup">
						<button class="btn btn-sm btn-primary">Signup</button>
					</a>
      	@endauth
			</div>
		</div>
	</header>
</div>