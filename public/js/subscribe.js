let $formSubscribe, $btnSubmit;

const alertSuccess = `<div class="alert alert-success" role="alert">
  Gracias por suscribirte a nuestra lista de espera!
</div>`;
const alertInfo = `<div class="alert alert-info" role="alert">
  Gracias! Ya te encuentras suscrito a nuestra lista de espera.
</div>`;

$(function () {
    $formSubscribe = $('#formSubscribe');
    $btnSubmit = $formSubscribe.find('button[type=submit]');

    $formSubscribe.on('submit', onPostSubscribe);
});

function onPostSubscribe(event) {
    event.preventDefault();
    $btnSubmit.prop('disabled', true);

    const url = $(this).attr('action');
    const data = $(this).serialize();

    $.ajax({
        url: url,
        type: 'post',
        dataType: 'json',
        success: function (response) {
            if (response.success) {
                $formSubscribe.html(alertSuccess);
            }
        },
        error: function () {
            $formSubscribe.html(alertInfo);
        },
        data: data
    });
}