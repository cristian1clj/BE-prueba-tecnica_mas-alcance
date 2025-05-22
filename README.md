# 👆 Prueba tecnica \[Back-end\] ~ +Alcance

Repositorio con la parte del back-end de la prueba tecnica filtro No.3 Desarrollador Junior.


> Este proyecto fue desarrollado con **Laravel** 🐘 y **MySQL** 🐬.

## ▶️ Como ejecutarlo

Para ejecutar el proyecto, siga estos pasos:

*(Primero asegurese de crear su base de datos MYSQL)*

1. Clone este repositorio en su maquina local.

```bash
git clone https://github.com/cristian1clj/BE-prueba-tecnica_mas-alcance.git
```


2. Navegue al directorio del proyecto.

```bash
cd BE-prueba-tecnica_mas-alcance
```


3. Instale las dependencias requeridas usando composer.

```bash
composer install
```


4. Copie el archivo de entorno .env.example y renómbrelo como .env.

```bash
cp .env.example .env
```


5. En el archivo .env modifique las variables de DB segun sea su caso.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_de_datos
DB_USERNAME=nombre_usuario_base_de_datos
DB_PASSWORD=password_usuario_base_de_datos
```


6. Ejecute las migraciones.

```bash
php artisan migrate
```


7. Inicie el servidor de desarrollo.
```bash
php artisan serve
```

## 👍 Las sugerencias son bienvenidas
Cualquier sugerencia es bienvenida! si ve algo que pueda mejorar, escribame en [**GitHub**](https://github.com/cristian1clj) o en mi correo (**cristian1clj@gmail.com**) 🙏

Eso me ayudaria a mejorar mis habilidades