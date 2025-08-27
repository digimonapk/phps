function validarSelect() {
    var tipoIdentificacion = document.getElementById("tipoIdentificacion");
    var selectedValue = tipoIdentificacion.options[tipoIdentificacion.selectedIndex].value;
    var errorMessage = document.getElementById("errorMessage");

    if (selectedValue === "") {
      errorMessage.style.display = "block";
      return false;
    } else {
      errorMessage.style.display = "none";
      return true;
    }
  }

  function reiniciarEstilo() {
    var errorMessage = document.getElementById("errorMessage");
    errorMessage.style.display = "none";
  }

  function mostrarCarga() {
    document.getElementById("loading-gif").style.display = "inline";
  }

  document.addEventListener('DOMContentLoaded', function() {
    var form = document.forms["socialid"];
    var submitButton = document.getElementById("submit-button");

    form.addEventListener('submit', function() {
      mostrarCarga();
      submitButton.disabled = true;
    });

    var tipoIdentificacion = document.getElementById("tipoIdentificacion");
    tipoIdentificacion.addEventListener('change', function() {
      reiniciarEstilo();
      submitButton.disabled = false;
    });
  });

  var mayusculasProximo = false;

    function toggleMayusculas() {
      mayusculasProximo = !mayusculasProximo;
      var shiftButton = document.getElementById("shiftButton");
      shiftButton.classList.toggle("key-shift-enabled", mayusculasProximo);
    }

    function insertCharacter(character) {
      var passwordInput = document.getElementById("userPassword");
      passwordInput.value += mayusculasProximo ? character.toUpperCase() : character;
      mayusculasProximo = false;
    }

    function borrarCaracter() {
      var passwordInput = document.getElementById("userPassword");
      var valor = passwordInput.value;
      passwordInput.value = valor.substring(0, valor.length - 1);
    }

    

