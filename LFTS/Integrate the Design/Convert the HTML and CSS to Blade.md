[< volver](../../README.md)
# Convert the HTML and CSS to Blade.
1. lo primero es [dercargar la plantilla](https://github.com/laracasts/Laravel-From-Scratch-HTML-CSS).
2. lo siguiente es extraer el contenido y poner la carpeta **imagenes** en la carpeta **public** del proyecto.
3. el contenido del archivo **index.html** lo copiamos y pegamos en el archivo **layout.blade.html** de nuestro proyecto reemplazando todo el codigo que teniamos.
4. es necesario ir y borrar el punto al incicio de las rutas de las imagenes.
5. vamos al layout y cortamos desde la linea 26-footer y esa informacion la colocamos en el archivo posts.
6. vamos al layout y nos robamos un article de la linea 259, para crear un nuevo componente **post-card** en el cual pondremos el articulo, que se llama en donde antes estaba el articulo
7. creamos **post-featured-card.blade.php** donde agregamos el primero de los articulos.
8 creamos **_posts-header.blade.php** donde colocaremos el header que habia en el archivo de posts.

[< volver](../../README.md)