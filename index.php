<!DOCTYPE html>
<html lang="pt-br" id="extr-page">

<!-- Mirrored from proesc.com/calculadora by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 21:38:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta http-equiv="Cache-control" charset="utf-8">
        <title>Calculadora FB</title>
        <link rel="icon" type="image/png" sizes="16x11" href="images/favicon.png">
        <meta name="description" content="Ambiente de simulação de valor de mensalidade">
        <meta name="author" content="Proesc.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
        <link media='all' type='text/css' rel='stylesheet' href='css/bootstrap.min.css'>
        <link media="all" type="text/css" rel="stylesheet" href="ambiente_inscricao/css/small-box.css">

        <link media="all" type="text/css" rel="stylesheet" href="css/font-awesome.min.css">

        <link media='all' type='text/css' rel='stylesheet' href='css/calculadora.css'>
        
    </head>
    <body class="greey">
        <script src='js/libs/jquery-2.0.2.min.js'></script>
        <script src='js/bootstrap/bootstrap.min.js'></script>
        <main class="conteudo conteudo-footer" style="padding-top: 16px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="small-box bg-white">
                            <div class="inner" style="padding-left:25px; padding-top: 25px">
                                <div class="form-group" style="margin-bottom: 0px;">
                                    <center><img class="logo" src="https://www.academiafernandinhobeltrao.com.br/redirect/imgs/HORIZONTALMENOR1.png"></center>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4 col-sm-4 col-p-6">&nbsp;</div>
                                    <div class="form-group col-md-5 col-xs-5 not-print right-md config-gear">
                                        <div id="vis" class="margin-left-0 btn-padding-10 right-md center-xs hidden-sm hidden-xs" >
                                        	<span style="font-size: 20px;">Calculadora FB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span id="ancora-subida"></span>
				<div class="row">
				    <div class="col-md-8 col-xs-12">
                        <div class="small-box bg-white">
                            <ul id="myTab1" class="nav nav-tabs bordered">
                                <li class="active" id="tab_mensalidade">
                                    <a href="#" data-toggle="tab" aria-expanded="true"><i class="fa fa-fw fa-lg fa fa-shopping-cart"></i>Mensalidades</a>
                                </li>
                                <li class="" >
                                    <a href="http://online.academiafernandinhobeltrao.com.br:81/online/matriculas2021/" target="_blank"><i class="fa fa-fw fa-lg fa-files-o"></i> Fazer matrícula</a>
                                </li>
                            </ul>
				            <div class="inner" style="min-height: 76px;">
                                <div class="orcamento_cliente">
    				                <center>
    				                	<p>Digite suas notas do ENEM</p>
    				                </center>
    				                <br>
    				                <div class="row">
    								    <div class="col-lg-3">
    					                	<label>RED</label>
                                            <input type="number" wm-red class="form-control"  placeholder="Nota de redação" >
    								    </div>
    								    <div class="col-lg-3">
    					                	<label>LIN</label>
                                            <input type="number" wm-lin class="form-control"  placeholder="Nota de linguagem" >
    								    </div>
                                        <div class="col-lg-3">
                                            <label>HUM</label>
                                            <input type="number" wm-hum class="form-control"  placeholder="Nota de humanas" >

                                        </div>
    								    <div class="col-lg-3">
    					                	<label>NAT</label>
                                            <input type="number" wm-nat class="form-control"  placeholder="Nota de naturais" >

    								    </div>

                                        <div class="col-lg-4 mt-3"  style="padding-top: 10px">
    					                	<label>MAT</label>
                                            <input type="number" wm-mat class="form-control"  placeholder="Nota de matemática" >

    								    </div>
                                        <div class="col-lg-4"  style="padding-top: 10px">
    					                	<label>SSA1</label>
                                            <input type="number" wm-ssa1 class="form-control"  placeholder="Nota do SSA1" >

    								    </div>
                                        <div class="col-lg-4"  style="padding-top: 10px">
    					                	<label>SSA2</label>
                                            <input type="number" wm-ssa2 class="form-control"  placeholder="Nota do SSA2" >

    								    </div>

    								</div>
                                    <br>
                                </div>
                                <div class="calculo_boleto" style="display:none;">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label>Valor da mensalidade</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control monetario" id="valor_mensalidade" placeholder="Valor da mensalidade escolar" >
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Taxa do cartão de crédito</label>
                                            <select class="form-control" id="taxa_cartao" data-rule="null" name="taxa_cartao">
                                                <option value="5">5%</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-5">
                                            <label>Quantidade de alunos</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="quantidade_alunos" placeholder="Quantidade de alunos da escola">
                                            </div>
                                        </div>
                                    </div>
                                </div>
				            </div>
				        </div>
				    </div>
				    <div class="col-md-4 col-xs-12 orcamento_cliente">
				        <div class="small-box bg-white" style="height: 160px;">
				            <div class="inner" style="min-height: 76px;">
				                <center>
				                	<button type="button" class="btn btn-success btn-lg" style="font-size: 30px; margin-top: 40px;;" id="calcular">Calcular</button>
								</center>
				            </div>
				        </div>
				    </div>

                    <div class="col-md-4 col-xs-12 calculo_boleto" style="display:none;">
                        <div class="small-box bg-white" style="height: 114px;">
                            <div class="inner" style="min-height: 76px;">
                                <center>
                                    <p>Valor Mensal: <span class='exibe_mensal'></span></p>
                                    <p>Valor Anual : <span class='exibe_anual'></span></p>
                                </center>
                            </div>
                        </div>
                    </div>
				</div>

			    <div class="row orcamento_cliente">
			        <div class="col-md-12 col-xs-12">
			            <div class="small-box bg-white">
				            <div class="inner" style="min-height: 76px;">
				                <span class="carregandoInformacoes"></span>
				                <br>
				                <span class="lista_registros">
				                	<div class="dados_registro">
					            		<table class="table">
					                        <tr>
					                        	<center><b>VALOR DO CURSO ESCOLHIDO</b></center>
					                        </tr>
					                        <tr>
					                        	<center>
					                        		<i class="fa fa-sun-o" aria-hidden="true" style="font-size: 77px;color: #0f4e73;"></i>
					                        	</center>
					                        </tr>
					                	</table>
					                </div>
				                </span>
				            </div>
			            </div>
			        </div>
			    </div>
                <div class="row calculo_boleto" style="display:none;">
                    <div class="col-md-12 col-xs-12">
                        <div class="small-box bg-white">
                            <div class="inner" style="min-height: 76px;">
                                <span class="carregandoInformacoesCartao"></span>
                                <br>
                                <span class="lista_registros_cartao">
                                    <div class="dados_registro_cartao">
                                        <table class="table">
                                            <tr>
                                                <center><b>INFORMAÇÕES FINANCEIRAS DO BOLETO PROESC.COM</b></center>
                                            </tr>
                                            <tr>
                                                <center>
                                                    <i class="fa fa-sun-o" aria-hidden="true" style="font-size: 77px;color: #0f4e73;"></i>
                                                </center>
                                            </tr>
                                        </table>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src='js/jquery.maskMoney.min.js'></script>
<script src='js/jquery.toaster.js'></script>
<script src='js/plugin/monetario/mascara_monetario.js'></script>
<script>
// Função para calcular a mensalidade
	$(document).delegate('#calcular', 'click', function(event)
    {
       const red = document.querySelector('[wm-red]')
       const lin = document.querySelector('[wm-lin]')
       const hum = document.querySelector('[wm-hum]')
       const nat = document.querySelector('[wm-nat]')
       const mat = document.querySelector('[wm-mat]')
       const ssa1 = document.querySelector('[wm-ssa1]')
       const ssa2 = document.querySelector('[wm-ssa2]')
       
       const valores = [parseInt(red.value),parseInt(lin.value),parseInt(hum.value),parseInt(nat.value),parseInt(mat.value),parseInt(ssa1.value),parseInt(ssa2.value)]
       
        calculaAjuste(parseInt(ssa1.value),parseInt(ssa2.value),media(valores));
    });
    function converteMoeda(valor){
        return valor.replace('.','').replace(',','.')
    }
    function media(valores){
        let soma = 0
        for(let i in valores){            
            if(!valores[i]) 
                valores[i] = 0
            soma = soma + valores[i]            
        }
        return soma/valores.length
    } 

    function calculaAjuste(ssa1, ssa2, media)
    {
      
    	$(".carregandoInformacoes").html("<div class='loading'><center><i class='fa fa-spinner fa-5x fa-spin' aria-hidden='true'></i></center></div>");
    	$(".dados_registro").remove();

        const valorSSA1 = 1500-(10*ssa1)
        const valorSSA2 = 1500-(10*ssa2)
        const valorSSA3 = 1500-media

        let html = `
                    <div class="col-md-4 col-xs-12 orcamento_cliente">
				        <div class="small-box bg-white" style="height: 160px;">
				            <div class="inner" style="min-height: 76px;">
				                <center>
                                <h4>SSA1</h4>
				                	<button type="button" class="btn btn-warning btn-lg" style="font-size: 20px;">${valorSSA1.toLocaleString("pt-br",{style: "currency", currency: "BRL"})}</button>
<br>
                                    <a href="http://online.academiafernandinhobeltrao.com.br:81/online/matriculas2021/" target="_blank" class="btn btn-primary" style="margin-top: 10px;;" id="">Fazer matrícula</a>

								</center>
				            </div>
				        </div>
				    </div>
                    <div class="col-md-4 col-xs-12 orcamento_cliente">
				        <div class="small-box bg-white" style="height: 160px;">
				            <div class="inner" style="min-height: 76px;">
				                <center>
                                <h4>SSA2</h4>
                                <button type="button" class="btn btn-warning btn-lg" style="font-size: 20px;">${valorSSA2.toLocaleString("pt-br",{style: "currency", currency: "BRL"})}</button>
<br>
                                    <a href="http://online.academiafernandinhobeltrao.com.br:81/online/matriculas2021/" target="_blank" class="btn btn-primary" style="margin-top: 10px;;" id="">Fazer matrícula</a>
								</center>
				            </div>
				        </div>
				    </div>
                    <div class="col-md-4 col-xs-12 orcamento_cliente">
				        <div class="small-box bg-white" style="height: 160px;">
				            <div class="inner" style="min-height: 76px;">
				                <center>
                                    <h4>SSA3</h4>
				                	<button type="button" class="btn btn-warning btn-lg" style="font-size: 20px;">${valorSSA3.toLocaleString("pt-br",{style: "currency", currency: "BRL"})}</button>
<br>
                                    <a href="http://online.academiafernandinhobeltrao.com.br:81/online/matriculas2021/" target="_blank" class="btn btn-primary" style="margin-top: 10px;;" id="">Fazer matrícula</a>
								</center>
				            </div>
				        </div>
				    </div>
                    `;
        $('.lista_registros').html(html);

        $(".carregandoInformacoes").remove();
    }
</script>
</body>

<!-- Mirrored from proesc.com/calculadora by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 21:38:32 GMT -->
</html>
