## Validador de Cédula y RUC de Ecuador (Soporte a documentos de extranjeros)

Este pequeño paquete ha sido creado para dar soporte al de nuestro amigo Tavo, para remover la validación del tercer dígito de acuerdo a este informe:
[https://www.jybaro.com/blog/cedula-de-identidad-ecuatoriana/#actualizacion20170714](https://www.jybaro.com/blog/cedula-de-identidad-ecuatoriana/#actualizacion20170714)

Permite validar algunos documentos:
- Cédula
- RUC de persona natural
- RUC de sociedad privada
- RUC de sociedad pública

Introducción
-------------

Para el desarrollo de este paquete se ha tomado como base el siguiente repositorio [validacion-cedula-ruc-ecuador](https://github.com/diaspar/validacion-cedula-ruc-ecuador) creado por [diaspar](https://github.com/diaspar),
el cual ha sido modificado, para que sea mucho más fácil de instalar y usar en  cualquier proyecto PHP mediante composer.

Si quieres saber más sobre la lógica utilizada a este paquete puedes visitar el siguiente artículo [Cómo validar cédula y RUC en Ecuador](https://medium.com/@bryansuarez/c%C3%B3mo-validar-c%C3%A9dula-y-ruc-en-ecuador-b62c5666186f), donde se detalla el proceso manual.

Instalación
----
```bash
composer require bitmedia/ec-validador-ci-ruc
```

Uso
----

- Primero Asegúrese de requerir al archivo de carga automática de composer así:

```php
require 'vendor/autoload.php';
```

- Luego Instanciar la clase y llamar al método para validar la identificación

Ejemplo:

```php
//Cargar el autoload de composer
require 'vendor/autoload.php';

// Crear nuevo objeto
$validador = new Bitmedia\ValidatorEc;

// validar CI
if ($validador->validarCedula('0926687856')) {
    echo 'Cédula válida';
} else {
    echo 'Cédula incorrecta: '.$validador->getError();
}

// validar RUC persona natural
if ($validador->validarRucPersonaNatural('0926687856001')) {
    echo 'RUC válido';
} else {
    echo 'RUC incorrecto: '.$validador->getError();
}

// validar RUC sociedad privada
if ($validador->validarRucSociedadPrivada('0992397535001')) {
    echo 'RUC válido';
} else {
    echo 'RUC incorrecto: '.$validador->getError();
}

// validar RUC sociedad pública
if ($validador->validarRucSociedadPublica('1760001550001')) {
    echo 'RUC válido';
} else {
    echo 'RUC incorrecto: '.$validador->getError();
}
```
