<p align="center">
    <img src="https://github.com/GeeksHubsAcademy/2020-geekshubs-media/blob/master/image/logo.png" >	
</p>


    Considere el siguiente problema:

    Escriba un programa corto que dada una secuencia 'v' se define de la siguiente manera:

	El número v (0) = 1

	Para cada 'x' en 'v', entonces cumpla las dos funciones:
		y = 2 * x + 1 
		z = 3 * x + 1 

	No hay otros números en 'v' que sean los resultados.

	Ej: v = [1, 3, 4, 7, 9, 10, 13, 15, 19, 21, 22, 27 ...]

	v(0)  = 1
	v(1)  = 3  | 4
	v(3)  = 7  | 10
	v(4)  = 9  | 13
	v(7)  = 15 | 22 
	v(10) = ...

	y así sucesivamente sin duplicados...
    
    En la carpeta 'src/Puntero.php' se encuentra el fichero con la definición de nuestro método vacío.
    En la carpeta 'test/PunteroTest.php' se encuentra el fichero con la suite de test.

    El modus operandi de trabajo es el siguiente:
    
    Debes 'forkear' el proyecto a tu cuenta.
    Puedes hacer PR's ilimitadas e ir validando poco a poco la solución contra nuestro respositorio con CI.
    Puedes trabajar en local y subir la solución haciendo un PR a nuestro repositorio.
    Cuando se envíe la PR final, debes indicar el tiempo de dedicación y los intentos que has hecho.
    También puedes añadir un comentario para dar cualquier tipo de feedback.
    
    En caso de duda, revisa en el apartado de 'Referencias'.

    Runtime:       PHP 7.2
    Configuration: ./305-ts-php/phpunit.xml

    Time: 00:05.334, Memory: 6.14 MB

    ......................................                                           38 / 38 (100%)
   
    OK (39 tests, 39 assertions)
    Process finished with exit code 0
