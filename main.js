/* con este getElementById va a buscar el id que es barra*/
const $barra = document.getElementById("barra")

/* agregar o detectar un evento */
window.addEventListener("scroll", ()=>
{
	/*console.log("funcionando");*/
	/*console.log(window.scrollY);*/
	const $posicion = Math.floor(window.scrollY)

	if ($posicion > 170) 
	{
		$barra.style.padding = "15px 0px"
	}
	else
	{
		$barra.style.padding = "27px 0px"
	}
})

const $year = document.getElementById("year")

let a = new Date()
let guardar = a.getFullYear()

$year.textContent = guardar

