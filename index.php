<?php
  require 'header/header.php';
?>
  
    <div class="min-h-screen flex items-center justify-center">
         <div class="bg-white p-8 rounded-2x1 shadow-lg w-full max-w-md">
              <h2 class="text-2x1 font-bold text-gray-800 mb-6 text-center">Formulario Registro</h2>

              <form action="">
                  <div class="mb-4">
                         <label class="block text-gray-700 font-medium mb-2">Nombre</label>
                         <input type="text" name="nombre_paciente" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nombre paciente">
                  </div>
                    <div class="mb-4">
                         <label class="block text-gray-700 font-medium mb-2">Apellido</label>
                         <input type="text" name="apellido_paciente" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Apellido paciente">
                  </div>
                  <div class="mb-4">
                         <label class="block text-gray-700 font-medium mb-2">Edad</label>
                         <input  type="text"
  inputmode="numeric" name="edad_paciente" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Apellido paciente">
                  </div>

                  <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Registrar</button>
              </form>

         </div>
    </div>



 <?php
  require 'footer/footer.php';
?>