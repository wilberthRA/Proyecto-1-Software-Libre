[< volver](../../README.md)
# Blade Layouts Two Ways.
1. vamos a las vistas y creamos una nueva con el nombre de **layout.blade.php** donde pondremos la estructura HTML y en body poner **```@yield('content)```**
2. ahora podemos ir a el archivo **posts.blade.php** en donde se pondrá la extencion ```@extends('layout')``` y despues poner ```@section('content')``` con su respectivo final donde iria el "body" de nuestra view.
3. se cambia el archivo **post.blade.php** para adaptarlo al uso de layouts.
4. para la siguente manera de hacer los layout es simplemente ir al view layout que se creó anteriormente y en la parte de body cambiarlo que hay por ```{{$content}}``` o ```{{$slot}}```.
5. para usarla lo que se hace es ir a la view que quieras, usando ```<x-layout></x-layout>``` como elemento principal (si se usó **$slot**, en el layout, si no ,es necesario usar ```<x-slot></x-slot>``` en medio del elemento del layout). 


[< volver](../../README.md)