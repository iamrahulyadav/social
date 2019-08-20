<?php
function loadTheme() {
    global $dbConnect;
    $sql = "SELECT * FROM themes WHERE active = 1";
    $query = mysqli_query($dbConnect, $sql);
    if ($query) {
        return mysqli_fetch_assoc($query);
    }
}
function loadLanguage() {
    global $dbConnect, $so;
    $lang_active = $so['lang_active'];
    $sql = "SELECT key_lang, " . $lang_active . " FROM languages";
    $query = mysqli_query($dbConnect, $sql);
    $data = [];
    $result = [];
    if ($query) {
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
        foreach($result as $key => $value) {
            $data[$value['key_lang']] = $value[$lang_active];
        }
    }
    return $data;
}
