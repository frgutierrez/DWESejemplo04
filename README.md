# DWES04: Ejemplo Smarty
## Modulo DWES. Unidad 4. Ejemplo de uso del motor de plantillas Smarty. 

Este es un sencillo ejemplo de login usando el motor de plantillas de Smarty haciendo uso de consultas a una tabla de una base de datos y un sencillo sistema de verificación de errores.

El planteamiento de este ejercicio es poder comprender el funcionamiento de smarty y del modelo MVC (Modelo Vista Controlador). Este ejercicio de ejemplo es complementario al video realizado en youtube donde se explica con detalle.

Enlace al video: https://youtu.be/uPkoG1ukwAI

__**Detalles a tener en cuenta:**__

+ Los campos inputs tanto del usuario como del login son de tipo texto para poder observar el texto introducido y ver los avances. No se usan las claves encriptadas y son puro texto.
+ La clase DB usa el patrón sigleton, para configurar su funcionamiento solo hay que modificar los valores de las constantes define.
+ Se ha usado bootstrap para darle mejor apariencia y un css, pero no influyen en absoluto al funcionamiento del sistema de plantillas.
+ La carpeta libs con las librerias de Smarty ya vienen incluidas, aunque te recomiendo reestructurar en tu proyecto la ubicación de las mismas.

__**Notas:**__

+ Este ejemplo esta creado para que comprendais el funcionamiento de smarty con un sencillo ejemplo práctico. No useis este ejemplo como inicio, usad el vuestro propio implementando vuestro código propio.
+ Como culturilla general, es interesante consultar el patrón singleton (que lo uso en DB.class.php) y el método mágico autoloader.
