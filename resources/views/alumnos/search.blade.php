<div class="w-80">
    <form action="/alumno" method="GET">
        <input type="hidden" name="orden" value="{{ old('orden') }}">
        <div class="mb-3">
            <label for="nombre"
                class="text-sm font-medium text-gray-900 block mb-2">
                Nombre
            </label>
            <input type="text" name="nombre" id="nombre"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 px-2"
                value="{{ request()->query('nombre') }}">
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 text-center">Buscar</button>
        <a href="/depart"
            class="text-white border-green-700 border-2 bg-green-700 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 text-center">Limpiar</a>
    </form>
</div>
