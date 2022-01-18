<x-layout>
    <form action="{{ route('alumno.update', $alumnos->id, false) }}" method="POST">
        @method('PUT')
        <x-alumno.form
            :alumno="$alumno" />
    </form>
</x-layout>
