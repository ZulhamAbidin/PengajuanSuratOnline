<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>LOGIN</title>

	<style>
    .lorem {
        background-color: #2B5F9B !important;
        color: white !important;
		border: #2B5F9B !important;
    }

	.lorem-border{
		border: #2B5F9B !important;
	}

	.lorem-warna{
		color: #2B5F9B !important;
	}
</style>

</head>

<body>

	<?php if ($this->session->flashdata('gagal') == TRUE) : ?>
	<?= $this->session->flashdata('message'); ?>
	
    <div class="bg-red-100 border-t absolute z-50 w-full border-b border-red-500 text-red-700 px-4 py-3" role="alert">
        <p class="font-bold">Peringantan</p>
        <p class="text-sm">Username atau Password Salah.</p>
    </div>

	<?php endif ?>


	<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
		<div class="sm:mx-auto sm:w-full sm:max-w-sm">
			<h2 class="lorem-warna mt-16 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
				Sistem Informasi Pelayanan Surat Kelurahan Labukkang
			</h2>
		</div>

		<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
			<form class="space-y-6" action="#" method="post">
				<div>
					<label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
					<div class="mt-2">
						<input id="username" name="username" type="username" autocomplete="username" required
							class="block pl-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:text-sm sm:leading-6">
					</div>
				</div>

				<div>
					<div class="flex items-center justify-between">
						<label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
						<div class="text-sm">
							<a href="#" class="lorem-warna font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
						</div>
					</div>
					<div class="mt-2">
						<input id="password" name="password" type="password" autocomplete="current-password" required
							class="block pl-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:text-sm sm:leading-6">
					</div>
				</div>

				<div>
					<button type="submit"
						class="lorem flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
						in</button>
				</div>
			</form>
		</div>
	</div>
</body>

