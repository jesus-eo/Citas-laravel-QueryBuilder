<x-layout>
    {{-- {{dd($citalibre)}}; --}}
    <div class="flex flex-col items-center mt-4">
        <h1 class="mb-4 text-2xl font-semibold">Historial cita</h1>

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

                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($historial as $elem)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                {{$elem->fecha}}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{$elem->hora}}
                                </div>
                            </td>
                            @endforeach

                        </tr>
                        <tr class="px-6 py-4">
                            <td>
                            <button  class="px-4 py-1 text-sm text-white bg-red-400 rounded" ><a href="/citas/index">Volver</a></button>
                            </td>
                        </tr>


                </tbody>
            </table>

        </div>


    </div>
</x-layout>
