//Archivo para validar los inputs
const expresiones = { //expresiones regulares
  usuario: /^[a-zA-Z0-9\_\-]{4,16}$/,//Letras, numeros, guion y guion_bajo  
  nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
  password:/^.{6,12}$/, // 4 a 12 digitos.  
  correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  telefono: /^\d{7,14}$/, // 7 a 14 numeros.
};
//Para validaciones del lado del cliente es necesario ocupar JavaScript
//DOM es la parte de acceso a los eventos
//Los querys selector es necesario accedetr con id o class

const formulario = document.getElementById("val-login");//Accedemos a todo el formulario
const salida = document.querySelectorAll("#val-login input");//Nos va traer todos los inputs dentro del formulario

const campos = {
  email: false,
  password: false,
};

//Una funcion flecha se autoejecutan sin que le digas una indicacion
const validaForm = (e) =>{
  //Vamos a acceder a los inputs para hacer la validacion accedemos con el nombre del input y saber distinguir con quien trabajo
  //target accedemos a la propiedad de tal etiqueta
  //el metodo test evalua las expresiones regulares si estas cumplen
  switch(e.target.name){
    case "email":
      if (expresiones.correo.test(e.target.value)) {
        document.getElementById("email").classList.add("is-valid");
        document.getElementById("email").classList.remove("is-invalid");
        campos.email = true;
       }  else {
        document.getElementById("email").classList.remove("is-valid");
        document.getElementById("email").classList.add("is-invalid");
        campos.email = false;
      }
    break;
    
    case "password":
      if (expresiones.password.test(e.target.value)) {
        document.getElementById("pass").classList.add("is-valid");
        document.getElementById("pass").classList.remove("is-invalid");
        campos.password = true;
      } else {
        document.getElementById("pass").classList.remove("is-valid");
        document.getElementById("pass").classList.add("is-invalid");
        campos.password = false;
      }
      break;
  } 

}    


//input :Va ser la iteracion, nuestro controlador, cada que accedamos nos imprime cada valor de arreglo(en este caso input por input)
salida.forEach((input)=>{
//eventlistener son eventos que se lanzan en automatico
input.addEventListener("keyup", validaForm);//Nos da la funcion de validacion automatica y tenemos el parametro de la funcion
})//Accedemos valor por valor sin un controlador


