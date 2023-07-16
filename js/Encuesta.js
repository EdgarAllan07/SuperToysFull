function Validar()
{
	var Nombre = document.getElementById('Name').value;
	var Edad = document.getElementById('Edad').value;

	if (Nombre.length == 0) {
		alert('Por Favor escriba su nombre');
		document.Formulario.Name.focus()
		return 0;
	}	

	Edad = parseInt(Edad)	

	if (isNan(Edad)){
		alert('Ingrese su edad solo con numeros');
		document.Formulario.Edad.focus()
		return 0;	
	}
	else{
		if (Edad < 15){
			alert('Debe de ser mayor de 15 años');
			document.Formulario.Edad.focus()
			return 0;
		}
	}
	document.Formulario.submit();	
}

function VerificarEntero(Number){
	Number = parseInt(Number)

	if (isNan(Number)){
		return "0"
	}
	else {
		return Number
	}
}
