[< volver](../../README.md)
# Your First Eloquent Relationship.
1. lo primero que hacemos es crear el modelo y la migracion para categorias con:**php artisan make:model category -m**
2. en la migracion de post agregamos la foreign key a la tabla de categorias **$this->foreignId('category_id')**.
3. con tinker vamos y agregamos tres categorias para el trabajo, personal y hobbies.
4. en los archivos de **post** y **posts** agregamos ```{{$post->category->name}}```.

[< volver](../../README.md)