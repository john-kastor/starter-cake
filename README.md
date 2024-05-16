# Starter CakePHP 1.2

Proyecto de inicio para CakePHP 1.2, con AmazonLinux 2, PHP 5.4 y Apache 2.4.

## Instrucciones de uso

Asegurate de tener instalado Docker y Docker Compose en tu maquina, una manera sencilla de instalarlo es con el siguiente instalador: [Docker Desktop](https://www.docker.com/products/docker-desktop)

Para hacer uso de la applicacion/contenedor, usa los siguientes comandos en tu terminal:
```bash
docker-compose up -d #monta el contenedor en segundo plano
docker exec cake-app #accede al contenedor y ejecuta comandos (ejemplo: docker exec cake-app php -v)
#or
docker compose --env-file .env up -d # utiliza el .env especificado para crear los contenedores
docker compose exec seviceName bash
## EJEMPLOS
docker compose exec app bash # bash en el contenedor de la app
docker compose exec mysql bash # bash en el contenedor de la base de datos mysql
docker compose exec app bash -c "php -v" # -c "comandos" permite ejecutar comandos sin ingresar al shell

docker-compose down -v #detiene y elimina el contenedor
```

Una vez que el contenedor este corriendo, puedes acceder a la aplicación en tu navegador con las siguientes URL:
* [cakephp -> http://localhost/  ](http://localhost/) \
* [phpmyadmin -> http://localhost:8080/ ](http://localhost:8080/)

## Configuración

Para configurar la aplicación, puedes modificar el archivo `docker-compose.yml` y el archivo `Dockerfile` para ajustar las configuraciones de PHP y Apache.

Hay un archivo en `_docker_config/apache-config.conf` que puedes modificar para ajustar la configuración de Apache.

## Pendientes
- [ ] Agregar soporte para MySQL
- [ ] Agregar soporte para PostgreSQL

## Fuentes / Referencias
- [johnae/cake-php](https://github.com/johnae/cake-php) - Version de CakePHP 1.2 usada en este proyecto.
