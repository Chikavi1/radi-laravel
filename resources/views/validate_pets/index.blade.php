@include('layouts.nav')

<div class="min-h-screen flex justify-center items-center mx-40">
	<div class="container mx-auto bg-indigo-500 rounded-lg p-14 ">
		<form class="px-12">
			<h1 class="text-center font-bold text-white text-4xl">Verificación de adopción</label>
				<p class="mx-auto font-normal text-sm my-6 max-w-lg">En Radi Pets puedes verificar la autenticidad de la adopción.</p>
				<div class="sm:flex items-center bg-white rounded-lg overflow-hidden px-2 py-1 justify-between">
					<input class="text-base text-gray-400 flex-grow outline-none px-2 " type="text" placeholder="Ingresa el código de verificación" />
					<div class="ms:flex items-center px-2 rounded-lg space-x-4 mx-auto ">
						<button class="bg-indigo-500 text-white text-base rounded-lg px-4 py-2 font-thin">Buscar</button>
					</div>
				</div>
		</form>
	</div>
</div>
