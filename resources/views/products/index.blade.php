<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex space-x-1">
                    <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700" id="openModalButton">Add</button>
                </div>
                <div class="p-6 text-gray-900">
                    <table id="table">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Price</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <a href="javascript:void(0)" onclick="editModal({{ $item->id }})" class="underline text-lg mr-2">{{ $item->nombre }}</a>
                                        (<span class="cursor-pointer text-red-600" onclick="removeItem({{ $item->id }})">X</span>)
                                    </td>
                                    <td>${{ number_format($item->precio, 2, ".", ",") }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="hidden fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay, show/hide based on modal state. -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
            <!-- Modal Panel -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:w-auto">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <div class="mt-2">
                                <form action="{{ route('create-product') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid grid-cols-2 gap-8">
                                        <div id="showImagenEdit" class="hidden">
                                            <img src="" id="iImagen" alt="imagen" class="w-[300px]" />
                                        </div>
                                        <div class="my-auto">
                                            <label class="block mb-2 text-sm font-medium text-gray-900">
                                                Name
                                            </label>
                                            <input type="text" name="nombre" id="iNombre" autocomplete="off" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-900">
                                                Description
                                            </label>
                                            <input type="text" name="info" id="iInfo" autocomplete="off"  required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-900">
                                                Price
                                            </label>
                                            <input type="number" name="precio" id="iPrecio" step="0.01" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-900">
                                                Image
                                            </label>
                                            <input type="file" name="imagen" id="tatata" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" id="iId" value="0">
                                    <center>
                                        <button type="submit" class="mt-10 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                            Save
                                        </button>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" id="closeModalButton" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                        X
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Obtén el modal y el botón
        const productos     =   @json($productos);
        
        var modal = document.getElementById('myModal');
        var btn = document.getElementById('openModalButton');
        var closeButton = document.getElementById('closeModalButton');

        const iName         =   document.getElementById('iNombre');
        const iInfo         =   document.getElementById('iInfo');
        const iPrecio       =   document.getElementById('iPrecio');
        const iId           =   document.getElementById('iId');
        
        const showImage     =   document.getElementById('showImagenEdit');  
        const iImagen       =   document.getElementById('iImagen');
        const eImagen       =   document.getElementById('tatata');

        // Cuando el usuario haga clic en el botón, abre la modal
        btn.onclick = function() {
            modal.classList.remove('hidden');
            iName.value     =   '';
            iInfo.value     =   '';
            iPrecio.value   =   '';
            iImagen.value   =   '';
            iId.value       =   '0';
            eImagen.required    =   true;
            showImage.classList.add('hidden');
        }
        closeButton.onclick = function() {
            modal.classList.add('hidden');
        }

        // Cuando el usuario haga clic en cualquier lugar fuera de la modal, ciérrala
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.classList.add('hidden');
            }
        }

        function editModal(id) {
            modal.classList.remove('hidden');
            let producto    =   getProducto(id);
            iName.value     =   producto.nombre;
            iInfo.value     =   producto.info;
            iPrecio.value   =   producto.precio;
            showImage.classList.remove('hidden');
            iImagen.src     =   "{{ \Storage::url('public/productos/') }}"+producto.rutaImagen;
            eImagen.required    =   false;
            iId.value       =   producto.id;
        }
        function getProducto(id) {
            let producto    =   null;
            for(let i = 0; i < productos.length; i++) {
                if(productos[i].id == id) {
                    producto    =   productos[i];
                    break;
                }
            }
            return producto;
        }
        function removeItem(id) {
            if(confirm('Are you sure you want to remove this product?'))
                location.href='{{ url('products/delete') }}/'+id;
        }
    </script>
</x-app-layout>
