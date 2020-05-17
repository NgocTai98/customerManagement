<?php
// function showErrors($errors, $name){
//     if ($errors->has($name)) {
//         echo '<div class="alert bg-danger" role="alert">';
//         echo '<svg class="glyph stroked cancel">';
//         echo '<use xlink:href="#stroked-cancel"></use>';
//         echo '</svg>'.$errors->first($name).'<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>';
//         echo '</div>';
//     }
// }
function showErrors($errors, $name){
    if ($errors->has($name)) {
        echo '<div class="alert alert-danger" role="alert">';
        echo ' <strong>'.$errors->first($name).'</strong>';
        echo '</div>';
    }
}
