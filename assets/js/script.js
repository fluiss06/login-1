document.getElementById("btn__registrarse").addEventListener("click", register);
document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
window.addEventListener("resize", anchoPagina);

//funcion mostrar contraseña
document.querySelector
('.campo span').addEventListener('click', e => {
    const passwordInput = document.querySelector('#password');
    if (e.target.classList.contains('show')) {
        e.target.classList.remove('show');
        e.target.textContent = 'Ocultar';
        passwordInput.type = 'text';
    } else {
        e.target.classList.add('show');
        e.target.textContent = 'Mostrar';
        passwordInput.type = 'password';
    }
});


//declaracion de variables
var formulario_login = document.querySelector('.formulario__login');
var formulario_register = document.querySelector('.formulario__register');
var contenedor_login_register = document.querySelector('.contenedor__login-register');
var caja_trasera_login = document.querySelector('.caja__trasera-login');
var caja_trasera_register = document.querySelector('.caja__trasera-register');


function anchoPagina(){
	if(window.innerWidth > 850){
		caja_trasera_login.style.display = "block";
		caja_trasera_register.style.display = "block";

	}else{
		caja_trasera_register.style.display = "block";
		caja_trasera_register.style.opacity = "1";
		caja_trasera_login.style.display = "none";
		formulario_login.style.display = "block";
		formulario_register.style.display = "none";
		contenedor_login_register.style.left = "0px";
	}
}
anchoPagina();

function iniciarSesion (){
	if(window.innerWidth > 850){
		formulario_register.style.display = "none";
		contenedor_login_register.style.left = "10px";
		formulario_login.style.display = "block";
		caja_trasera_register.style.opacity = "1";
		caja_trasera_login.style.opacity = "0";
	}else{
		formulario_register.style.display = "none";
		contenedor_login_register.style.left = "0px";
		formulario_login.style.display = "block";
		caja_trasera_register.style.display = "block";
		caja_trasera_login.style.display = "none";
	}
}

function register (){
	if(window.innerWidth > 850){
		formulario_register.style.display = "block";
		contenedor_login_register.style.left = "410px";
		formulario_login.style.display = "none";
		caja_trasera_register.style.opacity = "0";
		caja_trasera_login.style.opacity = "1";
	}else{
		formulario_register.style.display = "block";
		contenedor_login_register.style.left = "0px";
		formulario_login.style.display = "none";
		caja_trasera_register.style.display = "none";
		caja_trasera_login.style.display = "block";
		caja_trasera_login.style.opacity = "1";
	}
}

