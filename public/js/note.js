let i = 0;

$(document).ready(function() {

    console.log(i);
    let foi = -1;
    let indiceSorteado =-1;

    window.Echo.channel('canal-mensagem')
    .listen('.EnviarNotificacao', (data) => {
        console.log(data);
        i++;
        const colorAlerts = [
            'alert-primary',
            'alert-secondary',
            'alert-success',
            'alert-danger',
            'alert-warning',
            'alert-info',
            'alert-light',
            'alert-dark'
        ];
        indiceSorteado = Math.floor(Math.random() * colorAlerts.length);

        while (foi == indiceSorteado){
            indiceSorteado = Math.floor(Math.random() * colorAlerts.length);
        }

        colorSort = colorAlerts[indiceSorteado];
        console.log(colorSort);
        $('#notificacao').append(`<div class="alert ${colorSort}">${i}. ${data.title}</div>`);
        foi = indiceSorteado;
    });
});

