<?php //Spanish Language Pack for Zen Cart 1.5x: https://github.com/torvista/Zen-Cart-1.5x-Spanish-Language-Pack
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: layout_controller.php 3197 2006-03-17 21:40:58Z drbyte $
//

define('HEADING_TITLE', 'Recuadros de las Columnas');

define('TABLE_HEADING_LAYOUT_BOX_NAME', 'Nombre del archivo del recuadro');
define('TABLE_HEADING_LAYOUT_BOX_STATUS', 'Columna Izq/Dch<br />ESTATUS');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE', 'Columna Única<br />ESTATUS');
define('TABLE_HEADING_LAYOUT_BOX_LOCATION', 'Columna<br />IZQ/DCH');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER', 'Columna Izq/Dch<br />ORDEN');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Columna Única<br />ORDEN');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_INFO_EDIT_INTRO', 'Haga los cambios necesarios');
define('TEXT_INFO_LAYOUT_BOX','Recuadro: ');
define('TEXT_INFO_LAYOUT_BOX_NAME', 'Nombre del Recuadro:');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','Ubicación: (la Columna Singular ignora este dato)');
define('TEXT_INFO_LAYOUT_BOX_STATUS', 'Estado de Columna Izquierda/Derecha: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE', 'Estado de Columna Única: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_INFO','Activado= 1 Desactivado=0');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER', 'Orden de Columna Izquierda/Derecha:');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Orden de Columna Única');
define('TEXT_INFO_INSERT_INTRO', 'Introduzca el nuevo recuadro con su información relacionada');
define('TEXT_INFO_DELETE_INTRO', '¿Seguro que desea eliminar este recuadro?');
define('TEXT_INFO_HEADING_NEW_BOX', 'Nuevo Recuadro');
define('TEXT_INFO_HEADING_EDIT_BOX', 'Editar Recuadro');
define('TEXT_INFO_HEADING_DELETE_BOX', 'Eliminar Recuadro');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','Eliminar recuadro faltante del listado de esta plantilla: ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','NOTA: Esto no elimina ficheros así que puede volver a añadir el cuadro en cualquier momento sólo añadiéndolo al directorio correcto.<br /><br /><strong>Eliminar nombre de recuadro: </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','Resetear el orden de los recuadros al orden POR DEFECTO de la plantilla: ');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','Esto no elimina ninguno de los recuadros. Solo restablecerá el orden por defecto');
define('TEXT_INFO_BOX_DETAILS','Detalles de Recuadro: ');

////////////////

define('HEADING_TITLE_LAYOUT_TEMPLATE', 'Disposición de la Plantilla');

define('TABLE_HEADING_LAYOUT_TITLE', 'Título');
define('TABLE_HEADING_LAYOUT_VALUE', 'Valor');

define('TABLE_HEADING_BOXES_PATH', 'Ruta Recuadros: ');
define('TEXT_WARNING_NEW_BOXES_FOUND', 'AVISO: Se ha encontrado Recuadros nuevos: ');

define('TEXT_MODULE_DIRECTORY', 'Directorio de la disposición del sitio:');
define('TEXT_INFO_DATE_ADDED', 'Añadido el:');
define('TEXT_INFO_LAST_MODIFIED', 'Última modificación:');

// layout box text in includes/boxes/layout.php
define('BOX_HEADING_LAYOUT', 'Disposición');
define('BOX_LAYOUT_COLUMNS', 'Controlador de las Columnas');

// file exists
define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<font color="ff0000"><b>FALTA</b></font><br />');


// Success message
define('SUCCESS_BOX_DELETED', 'Borrado correctamente de la plantilla del recuadro: ');
define('SUCCESS_BOX_RESET', 'La configuración de todos los recuadros fue restablecida correctamente al configuración por defecto de la Plantilla: ');
define('SUCCESS_BOX_UPDATED', 'Configuración del recuadro actualizada correctamente: ');

define('TEXT_ON', ' ACTIVADO ');
define('TEXT_OFF', ' DESACTIVADO ');
define('TEXT_LEFT', ' IZQ ');
define('TEXT_RIGHT', ' DCH ');

?>
