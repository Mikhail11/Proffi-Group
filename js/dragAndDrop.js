(function($) {
    $(document).ready(function() {
        var dropZone = $('#dropZone'),
            dropZoneText = $('#dropZoneText'),
            dropZoneContainer = $('#dropZoneContainer'),
            maxFileSize = 1000000; // максимальный размер файла - 1 мб.


        if (typeof(window.FileReader) === 'undefined') {
            dropZoneText.text('Не поддерживается браузером!');
            dropZoneContainer.addClass('error');
        }

        dropZone[0].ondragover = function() {
            dropZoneContainer.addClass('hover');
            return false;
        };

        dropZone[0].ondragleave = function() {
            dropZoneContainer.removeClass('hover');
            return false;
        };

        dropZone[0].ondrop = function(event) {
            event.preventDefault();

            var file = event.dataTransfer.files[0];

            if (file.size > maxFileSize) {
                dropZoneText.text('Файл слишком большой!');
                dropZoneContainer.addClass('error');
                return false;
            }

            dropZoneContainer.removeClass('hover');
            dropZoneContainer.addClass('drop');

            var xhr = new XMLHttpRequest();
            xhr.upload.addEventListener('progress', uploadProgress, false);
            xhr.onreadystatechange = stateChange;
            xhr.open('POST', '/upload.php');
            xhr.setRequestHeader('X-FILE-NAME', file.name);
            xhr.send(file);
        };

        function uploadProgress(event) {
            var percent = parseInt(event.loaded / event.total * 100);
            dropZoneText.text('Загрузка: ' + percent + '%');
        }

        function stateChange(event) {
            if (event.target.readyState == 4) {
                if (event.target.status == 200) {
                    dropZoneText.text('Загрузка успешно завершена!');
                } else {
                    dropZoneText.text('Произошла ошибка!');
                    dropZoneContainer.addClass('error');
                }
            }
        }

    });
})(jQuery);
