<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Usuarios del consultorio") }}
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
                    Rol
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
                    Angela
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Melendez
                </td>
                <td class="px-6 py-4">
                    Secretaria 1
                </td>
                <td class="px-6 py-4">
                    834-000-0000
                </td>
                <td class="px-6 py-4">
                    angela@upv.edu
                </td>
                <td class="px-6 py-4">
                    angela1secretaria
                </td>
            </tr>

            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Camila
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Catillo
                </th>
                <td class="px-6 py-4">
                    Secretaria 2
                </td>
                <td class="px-6 py-4">
                    834-500-0000
                </td>
                <td class="px-6 py-4">
                    camila@upv.edu
                </td>
                <td class="px-6 py-4">
                    camila2secretaria
                </td>
            </tr>

            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Lara
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Rojas
                </th>
                <td class="px-6 py-4">
                    Secretaria 3
                </td>
                <td class="px-6 py-4">
                    834-500-0000
                </td>
                <td class="px-6 py-4">
                    lara@upv.edu
                </td>
                <td class="px-6 py-4">
                    lara3secretaria
                </td>
            </tr>


            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Juan
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Carrera
                </th>
                <td class="px-6 py-4">
                    Recepcion 1
                </td>
                <td class="px-6 py-4">
                    834-100-0000
                </td>
                <td class="px-6 py-4">
                    Juan@upv.edu
                </td>
                <td class="px-6 py-4">
                    Juan1recepcion
                </td>
            </tr>



            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Maria
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Cruz
                </th>
                <td class="px-6 py-4">
                    Recepcion 2
                </td>
                <td class="px-6 py-4">
                    834-200-0000
                </td>
                <td class="px-6 py-4">
                    maria@upv.edu
                </td>
                <td class="px-6 py-4">
                    maria2recepcion
                </td>
            </tr>


            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Sara
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Mar
                </th>
                <td class="px-6 py-4">
                    Recepcion 3
                </td>
                <td class="px-6 py-4">
                    834-300-0000
                </td>
                <td class="px-6 py-4">
                    Sara@upv.edu
                </td>
                <td class="px-6 py-4">
                    sara3recepcion
                </td>
            </tr>



        </tbody>
    </table>
</div>



</x-app-layout>
