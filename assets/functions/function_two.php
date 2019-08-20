<?php
function So_LoadPage($page) {
    global $so;
    $path = 'themes/' . $so['theme']['name'] . '/layout/' . $page . '.phtml';
    if (file_exists($path)) {
        ob_start();
        require $path;
        $content = ob_get_contents();
        ob_get_clean();
        return $content;
    }
    
}
