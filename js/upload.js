/**
 * Created by user on 18.07.18.
 */

(function($) {
    $(document).ready(function() {
        var dropZone = $('#dropZone'),
            maxFileSize = 1000000; // максимальный размер файла - 1 мб.
    });

    if (typeof(window.FileReader) == 'undefined') {
        dropZone.text('Не поддерживается браузером!');
        dropZone.addClass('error');
    }

})(jQuery);
