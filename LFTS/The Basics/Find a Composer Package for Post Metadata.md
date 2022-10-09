[< volver](../../README.md)
# Find a Composer Package for Post Metadata
1. Lo primero es buscar yaml front matter php y entara al git y hacer la instalacion en la maquina en la carpeta del servidor usado.
2. se "importa" usando **use Spatie\YamlFrontMatter\YamlFrontMatter**
3. nos vamos a la ruta del "home" y agregamos ```$files = File::files(resource_path("posts"));
    $document = [];
    foreach($files as $file){
        YamlFrontMatter::parseFile($file);  
    }```
4. vamos al modelo de post y se crea un constructor con title,excerpt,date,body.
5. se agrega la metadata a los posts.
6. despues se coloca esto en la ruta de "home" ```$files = File::files(resource_path("posts/"));
    $posts = [];
    foreach($files as $file){
        $document = YamlFrontMatter::parseFile($file);  
        $posts[] = new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body()
        );
    }```
7. se agrega "slug" al constructor creado anteriormente.
8. despues de eso colocamos esto en la ruta del "home" ```return view('posts' , [
        'posts' => Post::all()
    ]);``` y se coloca esto ``` return collect(File::files(resource_path("posts/")))
        ->map(fn ($file) => YamlFrontMatter::parseFile($file))
        ->map(fn ($document) => new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        ));``` en la funcion de **all()** en el modelo **Post.php**.
9. despues de eso se cambia la funcion de **find** en el mismo modelo con: ```return static::all()->firstWhere('slug',$slug);```.
10. para finalizar de arregla la view de **post.blade.php** de la siguente manera  ```h1><?= $post->title; ?></h1>
        <div>
            <?= $post->body; ?>
        </div>```.

[< volver](../../README.md)