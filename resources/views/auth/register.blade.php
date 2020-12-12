



	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}


<div class="py-6">
  <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
        
        <div class="hidden lg:block lg:w-1/2 bg-cover"
        style="background-image:url('https://images.unsplash.com/photo-1556075798-4825dfaaf498?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=755&q=80')">
        </div>

        
        <div class="w-full p-8 lg:w-1/2">
            <h2 class="text-2xl font-semibold text-gray-700 text-center">ChikaHUB</h2>
            <p class="text-xl text-gray-600 text-center">¡Bienvenido!</p>
          
            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 lg:w-1/4"></span>
                <a href="#" class="text-xs text-center text-gray-500 uppercase"> Registrate</a>
                <span class="border-b w-1/5 lg:w-1/4"></span>
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"  name="name">
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Correo Electronico</label>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email" name="email">
            </div>
            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Cargo</label>
                </div>
                    <select  name="cargo" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none">
                    <option value="Desarrollador">Desarrollador</option>
                    <option value="Lider">Lider</option>
                    </select>
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                <input type="password" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"  name="password">
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Confirma contraseña</label>
                <input type="password" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"   name="password_confirmation">
            </div>
            
            <div class="mt-8">
                <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Registrate</button>
            </div>
            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 md:w-1/4"></span>
                <!-- <a href="#" class="text-xs text-gray-500 uppercase">o Crea una cuenta</a> -->
                <span class="border-b w-1/5 md:w-1/4"></span>
            </div>
        </div>
    </div>
</div>
</form>
