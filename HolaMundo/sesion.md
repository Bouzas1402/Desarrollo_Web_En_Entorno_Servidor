## Configurar PhpStorm con docker

1. Arrancar servicio docker en host y en PhpStorm
2. En la carpeta Images hacer un pull de la imagen ``phpstorm/php-apache:8.0-xdebug3.0``
3. Seleccionar imagen descargada y pulsar ``Create container``
4. En la ventana de configuración consignar
    * name: miphp
    * container name: miphp
    * modify options:
        * bind ports: 80:80
        * bind mounts: <carpeta-proyecto>:/var/www/html
        * environment variables: XDEBUG_CONFIG=client_host=host.docker.internal
5. Arrancar contenedor
6. Lanzar en navegador http://localhost
7. Para depurar página:
    2. Activar Run | Break at first line in PHP scripts
    3. Activar Run | Start Listening for PHP Debug Connections
    4. Añadir breakpoint en el código php
    5. Descargar plugin Xdebug helper en el navegador
    6. Activar el plugin en la página activa del navegador y recargar la página
    7. Ir al PhpStorm y comprobar que se activa el panel de Debug y la ejecución se detiene en el Breakpoint
    8. Pulsar botón para avanzar en la depuración línea a línea.