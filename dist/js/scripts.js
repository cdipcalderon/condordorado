	
	//funcion para mostrar el tiempo
	var tiempo_actualizar = 2000;// 1000 = 1 seg
	var tiempo_actualizar1 = 60000;
	var array_ini = [];
	
	function myTimer() {
		var d = new Date();
		var t = d.toLocaleTimeString();
		document.getElementById("tiempo_ahora").innerHTML = t;
	}
	function listar_tabla(){
        var parametros = {
            "plistar" : "listado",
        };
        $.ajax({
			cache:false,
            data: parametros,
            url: "ajax/listar_ajax.php",
            type: "post",
            /*
			beforeSend: function(){
                document.getElementById("modal").style.display="block";
                document.getElementById("mostrar_loading").style.display="block";
                document.getElementById("mostrar_loading").innerHTML="<img src='imgs/loading.gif' class='img'>";
            },
			*/
            success: function(response){                                
                document.getElementById("lightbox").style.display="none";
                document.getElementById("mostrar_loading").style.display="none";
                document.getElementById("mostrar_tabla").innerHTML=response;
				document.getElementById("mostrar_tabla").classList.add("thumbnail");
            }
        });
    }
	function corriente_total(){
        var parametros = {"plistar" : "corriente_total"};
        $.ajax({
			cache:false,
            data: parametros,
            url: "ajax/listar_ajax.php",
            type: "POST",
            success: function(response){
				if(response != null){
					corriente_total = response;
				}else{
					corriente_total = 0;					
				}
                document.getElementById("lightbox").style.display="none";
                document.getElementById("mostrar_loading").style.display="none";
                document.getElementById("corriente_total").innerHTML=corriente_total;
				//document.getElementById("corriente_total").classList.add("thumbnail");
            }
        });
    }
	function potencia_total(){
        var parametros = {"plistar" : "potencia_total"};
        $.ajax({
			cache:false,
            data: parametros,
            url: "ajax/listar_ajax.php",
            type: "POST",
            success: function(response){
				if(response != null){
					potencia_total = response;
				}else{
					potencia_total = 0;					
				}
                //document.getElementById("lightbox").style.display="none";
                //document.getElementById("mostrar_loading").style.display="none";
                document.getElementById("potencia_total").innerHTML = potencia_total;
				//document.getElementById("potencia_total").classList.add("thumbnail");
            }
        });
    }
	function potencia_inversor(){
        var parametros = {"plistar" : "potencia_inversor"};
        $.ajax({
			cache:false,
            data: parametros,
            url: "ajax/listar_ajax.php",
            type: "POST",
            success: function(response){
				if(response != null){
					potencia_inversor = response;
				}else{
					potencia_inversor = 0;					
				}
                document.getElementById("lightbox").style.display = "none";
                document.getElementById("mostrar_loading").style.display = "none";
                document.getElementById("potencia_inversor").innerHTML = potencia_inversor;
				//document.getElementById("potencia_inversor").classList.add("thumbnail");
            }
        });
    }
	function EnergiaDiaria_Irradiadia(){
        var parametros = {"plistar" : "EnergiaDiaria_Irradiadia"};
        $.ajax({
			cache:false,
            data: parametros,
            url: "ajax/listar_ajax.php",
            type: "POST",
            success: function(response){                                
                document.getElementById("lightbox").style.display="none";
                document.getElementById("mostrar_loading").style.display="none";
                document.getElementById("EnergiaDiaria_Irradiadia").innerHTML=response;
				//document.getElementById("EnergiaDiaria_Irradiadia").classList.add("thumbnail");
            }
        });
    }
	function EnergiaDiaria_Captada(){
        var parametros = {"plistar" : "EnergiaDiaria_Captada"};
        $.ajax({
			cache:false,
            data: parametros,
            url: "ajax/listar_ajax.php",
            type: "POST",
            success: function(response){                                
                document.getElementById("lightbox").style.display="none";
                document.getElementById("mostrar_loading").style.display="none";
                document.getElementById("EnergiaDiaria_Captada").innerHTML=response;
				//document.getElementById("EnergiaDiaria_Captada").classList.add("thumbnail");
            }
        });
    }
	function EnergiaDiaria_Regulador(){
        var parametros = {"plistar" : "EnergiaDiaria_Regulador"};
        $.ajax({
			cache:false,
            data: parametros,
            url: "ajax/listar_ajax.php",
            type: "POST",
            success: function(response){                                
                document.getElementById("lightbox").style.display="none";
                document.getElementById("mostrar_loading").style.display="none";
                document.getElementById("EnergiaDiaria_Regulador").innerHTML=response;
				//document.getElementById("EnergiaDiaria_Regulador").classList.add("thumbnail");
            }
        });
    }
	function utilizacion_energia(){
        var parametros = {
            "plistar" : "utilizacion_energia",
        };
        $.ajax({
			cache:false,
            data: parametros,
            url: "ajax/listar_ajax.php",
            type: "post",
            success: function(response){                                
                document.getElementById("lightbox").style.display="none";
                document.getElementById("mostrar_loading").style.display="none";
                document.getElementById("utilizacion_energia").innerHTML=response;
				//document.getElementById("utilizacion_energia").classList.add("thumbnail");
            }
        });
    }
	function pruebas_varias(){
        var parametros = {
            "plistar" : "pruebas_varias",
        };
        $.ajax({
			cache:false,
            data: parametros,
            url: "ajax/listar_ajax.php",
            type: "post",
            success: function(response){                                
                document.getElementById("lightbox").style.display="none";
                document.getElementById("mostrar_loading").style.display="none";
                document.getElementById("pruebas_varias").innerHTML=response;
				//document.getElementById("pruebas_varias").classList.add("thumbnail");
            }
        });
    }
	function cache(){
        var parametros = {
            "plistar" : "cache",
        };
        $.ajax({
			cache:false,
            data: parametros,
            url: "ajax/listar_ajax.php?cache=1",
            type: "get",
            success: function(response){                                
                document.getElementById("lightbox").style.display="none";
                document.getElementById("mostrar_loading").style.display="none";
                document.getElementById("pruebas_varias2").innerHTML=response;
				document.getElementById("pruebas_varias2").classList.add("thumbnail");
            }
        });
    }
	function addLink() {
		var body_element = document.getElementsByTagName('body')[0];
		var selection;
		selection = window.getSelection();
		var pagelink = "<br /><br />Más información: <a href='"+document.location.href+"'>"+document.location.href+"[/url]<br />Copyright © <b>Condor Dorado Inversiones</b>";
		var copytext = selection + pagelink;
		var newdiv = document.createElement('div');
		newdiv.style.display='none';
		body_element.appendChild(newdiv);
		newdiv.innerHTML = copytext;
		selection.selectAllChildren(newdiv);
		window.setTimeout(function() {
			body_element.removeChild(newdiv);
		},0);
	}
	function potencia_bateria(){
        var parametros = {
            "plistar" : "potencia_bateria",
        };
        $.ajax({
			cache:false,
            data: parametros,
            url: "ajax/listar_ajax.php",
            type: "post",
            success: function(response){                                
                document.getElementById("lightbox").style.display="none";
                document.getElementById("mostrar_loading").style.display="none";
                document.getElementById("potencia_bateria").innerHTML=response;
				//document.getElementById("potencia_bateria").classList.add("thumbnail");
            }
        });
    }
    function potencia_total_teorica(){
        var parametros = {
            "plistar" : "potencia_total_teorica",
        };
        $.ajax({
			cache:false,
            data: parametros,
            url: "ajax/listar_ajax.php",
            type: "post",
            success: function(response){                                
                document.getElementById("lightbox").style.display="none";
                document.getElementById("mostrar_loading").style.display="none";
                document.getElementById("potencia_total_teorica").innerHTML=response;
				//document.getElementById("potencia_total_teorica").classList.add("thumbnail");
            }
        });
		
	}
	function confirma_exportar_todo(){
	if(confirm("Deseas Exportar Todo a Excel?")){
		window.location.href="exportar0.php";
	}else{
		
	}}
	function exportar_dato_por_fecha_val1() {
		var f=new Date();
		var ano = f.getFullYear();
		var mes = f.getMonth() + 1;
		var dia = f.getDate();
		var x = document.getElementById("fechainicio").value;
		if(mes < 10) {
			mes = '0'+mes;
		}
		var hoy = ano + "-" + mes + "-" + dia;
		if(x > hoy){
			//alert("fecha seleccionada: " + x + "es mayor a la fecha actual " + hoy);
			document.getElementById("fechainicio").value = hoy;
			document.getElementById("fechafin").value = hoy;
		}
	}
	function exportar_dato_por_fecha_val2() {
		var f=new Date();
		var ano = f.getFullYear();
		var mes = f.getMonth() + 1;
		var dia = f.getDate();
		var y = document.getElementById("fechafin").value;
		if(mes < 10) {
			mes = '0'+mes;
		}
		var hoy = ano + "-" + mes + "-" + dia;		
		if(y > hoy){			
			document.getElementById("fechafin").value = hoy;
		}		
	}
	function btnGeneraExcel(){
		var parametros = {
            "plistar" : "enviado",
        };
        $.ajax({
			cache:false,
            data: parametros,
            url: "ajax/listar_ajax.php",
            type: "POST",
            success: function(response){
                document.getElementById("msg_alert_0").innerHTML=response;
				
				//document.getElementById("msg_alert_0").classList.remove("display_none");
				document.getElementById("fechainicio").value = "";
				document.getElementById("fechafin").value = "";
				//setTimeout('document.location.reload()',5000);
				//document.getElementById("btnfadeinDato").classList.add("display_none");
				//document.getElementById("potencia_total_teorica").classList.add("thumbnail");
            }
        });
		
	}
	function consulta_inicial(){
        var parametros = {
            "plistar" : "consulta_inicial",
        };
        $.ajax({
			cache:false,
            data: parametros,
            url: "ajax/listar_ajax.php",
            type: "post",
            success: function(response){
				array_ini.push(response);
				tamano = array_ini.length;                
				if(tamano == 2){
					valor0 = array_ini[0];
					valor1 = array_ini[1];
					if(valor0 == valor1){
						document.getElementById("modal_alerta").classList.remove("display_none");
						document.getElementById("modal_alerta").classList.add("display_block");
						array_ini.pop();
						array_ini.shift();
						//function(){consulta_final()};
					}else{
						array_ini.pop();
						array_ini.shift();
						document.getElementById("modal_alerta").classList.remove("display_block");
						document.getElementById("modal_alerta").classList.add("display_none");
						array_ini=[];
					}
				}
            }
        });
    }
	function indicador_eficiencia(){
        /*
		var parametros = {
            "plistar" : "indicador_eficiencia"
        };
		*/
        $.ajax({
			cache:false,
            //data: parametros,
            url: "ajax/listar_ajax.php?indicador_eficiencia=1",
            type: "post",
            success: function(response){                                
                document.getElementById("indicador_eficiencia").innerHTML=response;
				//document.getElementById("potencia_total_teorica").classList.add("thumbnail");
            }
        });		
	}
	function consulta_final(){
		var parametros = {
            "plistar" : "consulta_final",
        };
		var d = new Date();
		var var_tiempo = d.toLocaleTimeString();
		$.ajax({
			cache:false,
			data: parametros,
            type: "post",
            url: "ajax/listar_ajax.php",
            success: function(response){                                
                document.getElementById("alerta_enviada").innerHTML=response;
            }
        });
	}
	
	/*
	function refresh_web(){
		var parametros = {
            "plistar" : "refresh_web",
        };
        $.ajax({
			cache:false,
            data: parametros,
            url: "monitor.php",
            type: "post",
            success: function(response){
				document.getElementById("web").innerHTML=response;
            }
        });	
	}
	*/
	
	//setInterval(indicador_eficiencia(),1000);
	
	/*
	setInterval(listar_tabla(),tiempo_actualizar);
	setInterval(corriente_total(),tiempo_actualizar);
	setInterval(potencia_total(),tiempo_actualizar);
	setInterval(potencia_total_teorica(),tiempo_actualizar);
	setInterval(potencia_bateria(),tiempo_actualizar);
	setInterval(EnergiaDiaria_Irradiadia(),tiempo_actualizar);
	setInterval(EnergiaDiaria_Captada(),tiempo_actualizar);
	setInterval(EnergiaDiaria_Regulador(),tiempo_actualizar);
		
		*/
	
