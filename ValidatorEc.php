<?php

namespace Bitmedia;

/**
 * ValidadorEc contiene metodos para validar cédula, RUC de persona natural, RUC de sociedad privada y
 * RUC de socieda pública en el Ecuador.
 *
 * Los métodos públicos para realizar validaciones son:
 *
 * validarCedula()
 * validarRucPersonaNatural()
 * validarRucSociedadPrivada()
 *
 * Esta clase ha sido heredada para remover la validación del tercer digito que ocasiona problemas
 * al intentar validar un número de RUC o CI de algunos extranjeros.
 *
 * Ver mas información: https://www.jybaro.com/blog/cedula-de-identidad-ecuatoriana/#actualizacion20170714
 * Contacto: jflores@bitmedia.technology
 */

class ValidatorEc extends \Tavo\ValidadorEc
{

    protected function validarTercerDigito($numero, $tipo)
    {
        switch ($tipo) {
            case 'cedula':
            case 'ruc_natural':
                return true;
            default:
                parent::validarTercerDigito($numero, $tipo);
                break;
        }

        return true;
    }

}