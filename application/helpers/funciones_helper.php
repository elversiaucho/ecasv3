<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author oagarzond
 * @param	String	$ruta_archivo	Ruta relativa con el nombre del archivo
 * @return	URL absoluta del archivo deseado
 */
if (!function_exists("base_url_css")) {

    function base_url_css($ruta_archivo = '') {
        $CI = & get_instance();
        $url= $CI->config->base_url('assets/css/');
        if(!empty(ENVIRONMENT) && (ENVIRONMENT === 'dev' || ENVIRONMENT === 'hotfix' || ENVIRONMENT === 'test')) {
            $url= $CI->config->base_url('assets-dev/css/');
        }
        if (strlen($ruta_archivo) > 0) {
            $url .= $ruta_archivo;
        }
        return $url;
    }

}

/**
 * @author oagarzond
 * @param   String  $ruta_archivo   Ruta relativa con el nombre del archivo
 * @return  URL absoluta del archivo deseado
 */
if (!function_exists("base_url_js")) {

    function base_url_js($ruta_archivo = '') {
        $CI = & get_instance();
        $url = $CI->config->base_url('assets/js/asignaciones');
        if(!empty(ENVIRONMENT) && (ENVIRONMENT === 'dev' || ENVIRONMENT === 'hotfix' || ENVIRONMENT === 'test')) {
            $url= $CI->config->base_url('assets-dev/js/');
        }
        if (strlen($ruta_archivo) > 0) {
            $url .= $ruta_archivo;
        }
        return $url;
    }

}
