* Primero descargar el proyecto y copiar en app\public\wp-content\themes'
* Activar el tema en "appearance" -> "themes"
* Crear dos página: "recetas" y "contactar"
* Crear el menú en "appearance" -> "menu" y añadir las páginas
* IMPORTANTE: seleccionar el menú en: "Display location"
* Crear categorías "entrante", "principal" y "postre"
* Crear recetas con título, texto e imagen 
* Para cambiar el nombre del autor: "users" -> "all users" -> "edit" -> "Display name publicly as"
* Para cambiar el formato de la fecha: "settings" -> "general" -> "date format"
* Instalar el plugin "Contact Form 7" y activar
* Código del formulario de Contact 7:

```html
<div class="flex mb-5">
<label class="grow">Nombre</label>
[text* your-name class:w-48 class:border-2 class:border-3 class:border-gray-400 class:p-1 placeholder "Nombre" ]
</div>

<div class="flex mb-5">
<label class="grow">Email</label>
    [email* your-email class:w-48 class:border-2 class:border-3 class:border-gray-400 class:p-1 placeholder "Email"]
</div>

<div class="flex mb-5">
<label class="grow">Asunto</label>
    [text* your-subject class:w-48 class:border-2 class:border-3 class:border-gray-400 class:p-1 placeholder "Asunto"]
</div>

<div class="flex mb-5">
<label class="grow">Mensaje</label>
    [textarea* your-message class:w-48 class:border-2 class:border-3 class:border-gray-400 class:p-1 placeholder "Mensaje"]
</div>
```