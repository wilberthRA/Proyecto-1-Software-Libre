[< volver](../../README.md)
# Blade Components and CSS Grids.
1. vamos a el archivo de posts y agregamos esto a la linea del elemento **post-featured-card**:

    ```
    :post = "$posts[0]"

2. vamos a **post-featured-card** y agregamos:

    ````
    @props(['post'])
    ````
    
    al comienzo del codigo y en la linea 23 cambiamos el titulo por lo siguiente:

    ````
    {{$post->title}}
    ````

2. de la linea 12 en adelante encontraremos el codigo de las cateorias en donde borraremos una y haremos que sea dinamica de la siguente manera:

    ````
    <a href="/categories/{{$post->category->slug}}"
                                   class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                   style="font-size: 10px">{{$post-category->name </a>

3. para despues ir a la linea 31 y borrar uno de los parrafos y en el otro colocar :

    `````
    linea 27:

    {{$post->created_at->diffForHumans()}}

    {{$post->excerpt}}

    linea 40:

    <h5 class="font-bold">{{ $post->author->name}}</h5>
    
    linea 46:

    <a href="/posts/{{$post->slug}}"

    linea 48:

    <a href="/posts/{{$post->slug}}"
                                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                >Read More</a>

4. hacemos una configuracion similar en **post-card**.
5. agregamos un condicion que avisa y evita errores al momento de no no existir ningun post:

    ````
    @if ($posts->count())
    @else
                <p class="text-center">No posts yet. Plase check back later.</p> 
            @endif

6.agregamos lo siguente en la linea 2 de **post-card.blade.php**:

    ````
    {{$attributes->merge(['class' => "transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl"])}}>

7. se coloca lo siguente para que los posts aparescan en filas de diferentes tamaños:
    ````
    <x-post-card 
                        :post="$post" 
                        class="{{$loop->iteration< 3 ? 'col-span-3' : 'col-span-2'}}"/>
    
    ademas se le coloca en 6 elgrid de las colunas en el div.

8. Al final se crea un nuevo componente llamado **post-grid** donde colocaremos el codigo que estaba dentro de la etiqueta de **main** en el archivo de **post**

[< volver](../../README.md)    