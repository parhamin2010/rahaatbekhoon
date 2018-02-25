function generate(type, text) {
    var n = noty({
        text: text,
        type: type,
        dismissQueue: true,
        progressBar: true,
        timeout: 5000,
        layout: 'bottomLeft',
        closeWith: ['click'],
        theme: 'relax',
        maxVisible: 1,
        animation: {
            open: 'animated bounceInLeft',
            close: 'animated bounceOutLeft',
            easing: 'swing',
            speed: 500
        }
    });
    console.log('html: ' + n.options.id);
    return n;
}/**
 * Created by Ho33ein on 07/08/2017.
 */
