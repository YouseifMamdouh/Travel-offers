<?php
class General {
    public static function uploadImage($folder, $image) {
        $image->store('/', $folder);
        $filename = $image->hashName();
        return $filename;
    }
    public static function uploadMoshafImage($folder, $image, $sec_file_name) {
        $image->store('/'.$sec_file_name.'/', $folder);
        $filename = $image->hashName();
        return $filename;
    }
    public static function getCurrency() {
        return \App\Models\Currency::first()->currency;
    }
}
?>
