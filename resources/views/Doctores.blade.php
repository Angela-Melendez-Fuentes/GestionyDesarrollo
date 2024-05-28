<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Doctores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Doctores del consultorio") }}
                </div>
            </div>
        </div>
    </div>


    

    <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-900 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Apellido
                </th>
                <th scope="col" class="px-6 py-3">
                    Especialidad
                </th>
                <th scope="col" class="px-6 py-3">
                    Teléfono
                </th>
                <th scope="col" class="px-6 py-3">
                    Correo
                </th>
                <th scope="col" class="px-6 py-3">
                    Contraseña
                </th>
            </tr>
        </thead>

        <tbody>
            <tr class="bg-white dark:bg-gray-800">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Francisco
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Tovar
                </td>
                <td class="px-6 py-4">
                    Médico Cirujano
                </td>
                <td class="px-6 py-4">
                    834-600-0000
                </td>
                <td class="px-6 py-4">
                    Francisco@upv.edu
                </td>
                <td class="px-6 py-4">
                    FranciscoMC
                </td>
            </tr>

            <tr class="bg-white dark:bg-gray-800">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Diana
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    León
                </td>
                <td class="px-6 py-4">
                    Cirugía Pediátrica
                </td>
                <td class="px-6 py-4">
                    834-900-0000
                </td>
                <td class="px-6 py-4">
                    DianaLeon@upv.edu
                </td>
                <td class="px-6 py-4">
                    DianaLeonCP
                </td>
            </tr>



            <tr class="bg-white dark:bg-gray-800">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Abel
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Reyna
                </td>
                <td class="px-6 py-4">
                    Dermatología
                </td>
                <td class="px-6 py-4">
                    834-110-0000
                </td>
                <td class="px-6 py-4">
                    AbelReyna@upv.edu
                </td>
                <td class="px-6 py-4">
                    AbelReynaD
                </td>
            </tr>


            <tr class="bg-white dark:bg-gray-800">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Martha
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Mora
                </td>
                <td class="px-6 py-4">
                    Cardiología Clínica
                </td>
                <td class="px-6 py-4">
                    834-114-0000
                </td>
                <td class="px-6 py-4">
                   marthamora@upv.edu
                </td>
                <td class="px-6 py-4">
                   MarthaMoraCC
                </td>
            </tr>


            <tr class="bg-white dark:bg-gray-800">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Azuay
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Duque
                </td>
                <td class="px-6 py-4">
                    Cardiología Clínica
                </td>
                <td class="px-6 py-4">
                    834-114-0000
                </td>
                <td class="px-6 py-4">
                   marthamora@upv.edu
                </td>
                <td class="px-6 py-4">
                   MarthaMoraCC
                </td>
            </tr>


        </tbody>
    </table>
</div>



</x-app-layout>
