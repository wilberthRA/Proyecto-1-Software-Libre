[< volver](../../README.md)
# Database Seeding Saves Time.
1. vamos a la parte de seeders en cual encotraremos uno en generado por defecto el cual crea usuarios, ahi crearemos nuestros seeders, eje:

    ``` 
    Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

2. ahora es posible usar el comando:

    ```
    php artisan migrate:fresh --seed

3. se crean los seed para los post:

    ```
    Post::create([
            'user_id' => $user->id,
            'title' => 'My Family Post',
            'excerpt' => 'Excerpt for my post',
            'body' =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores molestias voluptatem debitis architecto necessitatibus facere maxime ipsum aperiam non accusantium? Quas nulla nisi sint sed consequuntur iusto illo beatae quaerat.',
            'slug' => 'my-family-post',
            'category_id' => $family->id
        ]);

4. se crean las relaciones de los posts con los usuarios.
5. se agrega el siguiente codigo en **post.blade.php** para mostrar el nombre del usuario de manera mas dinamica.
    
    ````
    By <a href="">{{$post->user->name}}</a> in

[< volver](../../README.md)