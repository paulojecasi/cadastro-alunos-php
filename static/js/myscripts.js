function GerarMatricula(){
	var txt = "ALU";
	var aleatorio = Math.floor(Math.random() * 6000);  // gerar um numero aleatorio inteiro
	document.getElementById('matricula').value = (txt + aleatorio);
}

function selector() {
  $(".alert").fadeTo(1, 1).removeClass('hidden');
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(".alert").addClass('hidden');
    });
  }, 1000); 
}