# Fernando  De La Cruz - Senior Backend Developer

# Desarrollo
Para el desarrollo de esta aplicación se tomo el cuenta la información proporcionada mediante el portal:
- Se descargo un archivo TXT con toda la información de los códigos postales.

## Base da datos
- Se creo una tabla con las columnas del archivo para guardar toda la información.
- Se importaron los datos del archivo del archivo TXT a la base de datos.
- Se creo la estructura necesaria en la base de datos.
- Se importo la información de la tabla principal en la estructura antes creada.
- Se exporto la base de datos a un archivo SQL con la estructura e información necesaria.

## Laravel
- Se creo un nuevo proyecto en Laravel utilizando docker y compose.
- Cree un archivo nuevo de testing para realizar las pruebas necesarias y validar que la estructura del JSON era la que se esperaba.
- Continue con la creación de la URL en la API para obtener la información.
- Se crearon los modelos necesarios para el correcto funcionamiento utilizando el ORM, creando primero los modelos que no tienen dependencia y después los que si la tienen.
- Cree la funciones en los modelos que obtienen las colecciones dependientes.
- Se procedió con la creación del controlador el cual recibe el el código postal como parámetro, consulta la información necesaria y la regresa en un JSON.
- Se procedió con las pruebas unitarias probando la URL de la API para validar que funcionara bien.

# Procesos necesarios
Cargar el archivo necesario ``` db.sql ``` en la base de datos en el cual se encuentran las sentencias SQL para crear la base de datos, las tablas y los registros.

Renombrar el archivo ```.env.prod``` con los datos necesarios para lo conexión a la base de datos:

``` mv .env.prod .env ```

Cambiar los siguientes valores por los del host actual en el archivo ```.env```:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=zips
DB_USERNAME=root
DB_PASSWORD=123
```
Iniciar el servidor:

``` php artisan serve ```

# Gracias
Gracias por el tiempo y el interés en mi perfil y habilidades. Cualquier duda o comentario favor de hacérmelo saber.