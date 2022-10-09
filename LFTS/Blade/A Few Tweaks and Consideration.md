[< volver](../../README.md)
# A Few Tweaks and Consideration.
en este episodio lo que se hiceron fueron cambios en el modelo, mas exctamente en el metodo de busqueda, ya que se masntuvo el que teniamos pero se creó uno nuevo el cual permitia evaluar si el post existe y si no mostrar un error.````$post = static::find($slug);
        if(! $post){
            throw new ModelNotFoundException();
        }````.

[< volver](../../README.md)