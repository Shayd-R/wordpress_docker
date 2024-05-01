# Utiliza la imagen oficial de WordPress como base
FROM wordpress:latest

# Copia el archivo de configuración personalizado de PHP a la ubicación adecuada
COPY php.ini /usr/local/etc/php/conf.d/

# Copia tu script de inicialización personalizado a la ubicación adecuada
COPY init.sh /usr/local/bin/

# Cambia al usuario root para realizar algunas operaciones
USER root

# Instala las herramientas necesarias (puedes agregar más según tus necesidades)
RUN apt-get update && apt-get install -y \
    vim \
    wget \
    && rm -rf /var/lib/apt/lists/*

# Cambia de nuevo al usuario de WordPress
USER www-data

# Establece el directorio de trabajo como la raíz de WordPress
WORKDIR /var/www/html

# Copia los archivos de WordPress de tu carpeta local al contenedor
COPY wordpress/ .

# Exponer el puerto 80 para acceder al sitio WordPress
EXPOSE 80

# Ejecuta el script de inicialización personalizado al iniciar el contenedor
CMD ["init.sh"]
