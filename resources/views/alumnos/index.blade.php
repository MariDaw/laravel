<x-layout>
    <x-depart.search/>
    <div class="flex flex-col items-center mt-4">
        <h1 class="mb-4 text-2xl font-semibold">Alumnos</h1>
        <div class="border border-gray-200 shadow">
            <table>
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Nombre
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Editar
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Borrar
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if($alumnos->count())
                    @foreach($alumnos as $alumno)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $alumnos->nombre }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="/depart/{{ $depart->id }}/edit"
                                    class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Editar</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="px-4 py-1 text-sm text-white bg-red-400 rounded">Borrar</a>
                            </td>
                        </tr>
                    @endforeach
                    @else
                </tbody>
            </table>
        </div>
        <a href="/alumno/create" class="mt-4 text-blue-900 hover:underline">Insertar un nuevo Nombre</a>
    </div>
    {{ $alumnos->links() }}
</x-layout>
