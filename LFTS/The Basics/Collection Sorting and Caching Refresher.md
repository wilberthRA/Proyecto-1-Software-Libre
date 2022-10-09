[< volver](../../README.md)
# Collection Sorting and Caching Refresher.
1.  lo primero ir al modelo de los post para asi agregar una forma de ordenar como se veran los posts, usando el siguiente metodo ```->sortBy("date");```.
2. colocamos dentro de ```return cache()->rememberForever('posts.all', function (){``` todo el metodo que habia en la funcion de **all()**
    #### Datos extra:
    * para poder ver si se esta guardando en el cache nos vamos a maquina virtual y usamos el comando **php artisan tinker** y **cache('posts.all)** para ver el contenido. 
    * es necesario ejecutar **cache()->forget('posts.all');** para borrar el cache cada vez que se realiza algun cambio.
3. agregamos un nuevo post.

[< volver](../../README.md)