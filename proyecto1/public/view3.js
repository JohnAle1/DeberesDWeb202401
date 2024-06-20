document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    if (name && email && message) {
        alert('Formulario enviado con éxito.\nNombre: ' + name + '\nCorreo Electrónico: ' + email + '\nMensaje: ' + message);
    } else {
        alert('Por favor, complete todos los campos.');
    }
});