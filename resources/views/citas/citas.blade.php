<x-layout>
<div class="flex flex-col items-center mt-4">
    <h1 class="mb-4 text-2xl font-semibold">Citas</h1>

    <div class="border border-gray-200 shadow">
        <table>
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-500">
                            Reservar Cita
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                            Anular Cita
                     </th>
                     <th class="px-6 py-2 text-xs text-gray-500">
                        Historial Citas
                    </th>

                </tr>
            </thead>
            <tbody class="bg-white">
                    <tr class="whitespace-nowrap">
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                            <a href="/citas/reservar">Reservar cita</a>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                <a href="/citas/anular">Anular cita</a>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                <a href="/citas/historial">Ver Historial</a>
                            </div>
                        </td>

                    </tr>
            </tbody>
        </table>

    </div>


</div>
</x-layout>
