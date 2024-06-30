$(document).ready(function() {
    var experienciaCount = 1;
// adicionar experiencia
    $('#addExperiencia').click(function() {
        experienciaCount++;

        var html = '<div class="experienciaItem">';
        html += '<label for="cargo' + experienciaCount + '">Cargo:</label>';
        html += '<input type="text" id="cargo' + experienciaCount + '" name="cargo[]">';

        html += '<label for="empresa' + experienciaCount + '">Empresa:</label>';
        html += '<input type="text" id="empresa' + experienciaCount + '" name="empresa[]">';

        html += '<label for="periodo' + experienciaCount + '">Período:</label>';
        html += '<input type="text" id="periodo' + experienciaCount + '" name="periodo[]">';

        html += '</div>';

        $('#experienciaContainer').append(html);  
});
}) 
