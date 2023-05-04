const  correo = document.getElementById("email");
const password  = document.getElementById("pass");
formulario.addEventListener("submit" , e =>{
  e.preventDefault();
  let aviso = "";
  let registro ="";
  let emailVal= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  let inicio = false;

  if (!emailVal.test(correo.value)) {
    warnings += 'El correo no es válido';
    inicio = true;
  }
  
  if(password.value < 8){
    alert = "La contraseña debe tener minimo 8 caracteres";
    inicio = true;
  }
});
