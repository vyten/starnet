<?php

/**
 * info.php
 *
 * server info
 *
 * @author		Urban Bjorken <vyten@munet.nu>
 */

class Info_Controller extends TinyMVC_Controller
{
  function index() {
    $this->view->display('info_view');
  }
}

?>