Preparación del despliegue de una Aplicación Web

¿Dónde se va a realizar el despliegue?

Se va a realizar en Apache

¿Existe un workflow automatizado definido para el despliegue?

No.

¿Existe un entorno de pre-producción?

Nuestro entorno de pre-producción sería XAMPP.


Despliegue 

1.	Instalables:

url de la practica: https://github.com/egonfe19/Despliegue-master 

Conexión con MySQL crear database y crear una tabla:

CREATE DATABASE despliegue;

CREATE TABLE Clientes (

        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

        nombre VARCHAR(30) NOT NULL,

        apellido VARCHAR(30) NOT NULL,

        email VARCHAR(50),

        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

        );

Meter datos en la tabla:

insert into clientes(nombre,apellido,email) values ('nombre1','apellido1','email1')";

2.	Prerrequisitos:

•	Ubuntu/Linux

•	Ip fija en servidor linux

•	Puerto 80 abierto 

•	Apache

•	Paquete php instalado en Linux

3.	Instrucciones:

Crear directorio y cambiar permisos a permisos de propietarios.

Después crear un archivo nombrephp.conf

Crear directorio donde vayamos a tener los archivos descargados y copiarlos

Actualizar apache con reload y habilitar el sitio web con a2ensite

Modificar archibo hosts y poner la ip y el nombre de la web

Habilitar puerto 80

Buscar en el navegador el servername que le hemos puesto a la pagina

4.	Verificaciones: 

•	Base de datos creada

•	Botones de la página funcionen

•	Todos los archivos descargados correctamente


5.	Rollback:

•	Si la base de datos no se ha creado, ver si la conexión entre el código y la base de datos es correcta.

•	Si la aplicación no va, hay que mirar que hemos subido la correcta

•	Si los botones no van, hay que mirar que los enlaces estén bien

•	Si no funciona el despliegue, comprobamos el servername que coincida con el que hemos puesto en el host, si no habrá que cambiarlo en uno de los dos sitios.

-	Si lo cambiamos en el servername, hay que ir al .conf que hemos creado, la ruta es: /etc/apache2/sites-available, hacemos un nano a nuestro .conf y cambiamos el servername.


•	Si sigue sin funcionar debemos comprobar los php y el index, para ver que todas las rutas están bien puesta, iremos a /var/www/nombredirectorio y ahí empezamos a comprobar todos nuestros archivos.

Si están todos bien escritos, igual lo que nos falla es la localizacion de los archivos, para mover documentos utilizamos el mv nombredocumeto /ruta/del/destino 

ej: mv index.html /var/www/despliegue

•	Si después de todo lo anterior sigue sin ir lo mejor es volver atrás y hacerlo de nuevo

-	Para borrar hacemos un rmdir y el nombre de lo que queremos borrar
