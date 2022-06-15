function validar() {
	// body...
var nombre, correo, asunto, telefono, empresa, mensaje, expresion;

nombre   = document.getElementById("nombre").value;
correo   = document.getElementById("correo").value;
asunto   = document.getElementById("asunto").value;
telefono = document.getElementById("telefono").value;
empresa  = document.getElementById("empresa").value;
mensaje  = document.getElementById("mensaje").value;



let entrar = false
expresion= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


if (nombre==="" || correo==="" || asunto==="" || telefono==="" || empresa==="" || mensaje==="") {
	alert ("Algunos campos estan vacios ");
	return false;
	entrar = true
}
else if (nombre.length>30 ) {
	alert ("El nombre es muy largo ");
	return false;
	entrar = true
} 

else if (correo.length>100 ) {
	alert ("El correo es muy largo ");
	return false;
	entrar = true
}

else if (!expresion.test(correo) ) {
	alert ("El correo no es valido");
	return false;
	entrar = true

}

else if (asunto.length>50 ) {
	alert ("El asunto es muy largo ");
	return false;
	entrar = true
}

else if (telefono.length>10 ) {
	alert ("El telefono es muy largo ");
	return false;
	entrar = true
}

else if (isNaN (telefono) ) {
	alert ("El telefono no es un número ");
	return false;
	entrar = true
}

else if (empresa.length>25 ) {
	alert ("El campo empresa es muy largo ");
	return false;
	entrar = true
}

else if (mensaje.length>500 ) {
	alert ("El mensaje es muy largo ");
	return false;
	entrar = true
}

if (entrar) {
		return false;
}
	else
	{
		alert ("El mensaje fue enviado ");
	}

}

