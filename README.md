<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Citas Laravel
Ejercicio de citas laravel utilizando la fachada DB(Querybuilder) sin modelos;
Escribir en PHP una aplicación para la reserva de citas de una consulta médica.
El programa tendrá dos partes: gestión de usuarios y gestión de citas.
Los usuarios se identican mediante un número de paciente y una contraseña.
Cuando el usuario solicite una cita, la aplicación debe mostrarle la siguiente cita disponible,
que será la siguiente a la última cita reservada, considerando que las citas son de 15 minutos.
La clínica cierra a las 21.00 horas, por lo que a partir de ahí se tendrá que dar la cita al día
siguiente, empezando a las 10.00 horas. Si el usuario acepta la cita propuesta, se creará la reserva
correspondiente. El usuario no podrá reservar una cita si ya tiene otra a la que todavía no haya
acudido, por lo que previamente tendrá que anular la anterior.
Se necesitará, al menos, esta información:
USUARIOS (id_usuario, nombre, contraseña)
CITAS (id_cita, fecha, hora, id_usuario)

1. Gestión de usuarios:
a) Login.
b) Logout.
2. Gestión de citas:
a) Reservar una cita.
b) Anular una cita.
c) Mostrar un listado histórico de todas las citas a las que ha acudido el
usuario desde que se abrió la clínica


