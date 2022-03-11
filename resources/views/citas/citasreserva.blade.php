<x-layout>
    {{-- {{dd($citalibre)}}; --}}
    <div class="flex flex-col items-center mt-4">
        <h1 class="mb-4 text-2xl font-semibold">Reservas cita</h1>

        <div class="border border-gray-200 shadow">
            <table>
                <thead class="bg-gray-50">
                    <tr>

                        <th class="px-6 py-2 text-xs text-gray-500">

                            Fecha
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                                Hora
                        </th>

                        <th class="px-6 py-2 text-xs text-gray-500">
                            Reservar
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    {{-- @foreach ($citalibre as $cita) --}}
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                {{$citalibre->fecha}}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{$citalibre->hora}}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <form action="/citas/{{$citalibre->id}}/{{$citalibre->fecha}}/{{$citalibre->hora}}/create" method="post">
                                    @csrf
                                <button  class="px-4 py-1 text-sm text-white bg-red-400 rounded" type="submit">reservar</button>
                                </form>
                            </td>
                            <td class="px-6 py-4">

                                <button  class="px-4 py-1 text-sm text-white bg-red-400 rounded" ><a href="/citas/index">Volver</a></button>
                            </td>
                        </tr>
                   {{--  @endforeach --}}

                </tbody>
            </table>

        </div>


    </div>
</x-layout>
