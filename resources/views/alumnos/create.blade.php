<x-layout>
    <form action="{{ route('alumno.store', [], false) }}" method="POST">
        <x-alumno.form
            :alumno="$alumno"/>
    </form>
</x-layout>