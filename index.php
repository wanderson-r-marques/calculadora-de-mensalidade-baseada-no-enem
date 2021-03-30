<!DOCTYPE html>
<html lang="pt-br" id="extr-page">

<!-- Mirrored from proesc.com/calculadora by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 21:38:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta http-equiv="Cache-control" charset="utf-8">
        <title>Calculadora</title>
        <meta name="description" content="Ambiente de simulação de vendas de planos">
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
                            <div class="inner" style="padding-top: 10px">
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
                                <li class="" id="tab_boleto">
                                    <a href="#" data-toggle="tab" aria-expanded="false"><i class="fa fa-fw fa-lg fa-files-o"></i> Realizar pagamento</a>
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
    $(document).delegate('#tab_mensalidade', 'click', function(event)
    {
        $('.orcamento_cliente').show(200);
        $('.calculo_boleto').hide(200);

        $('#tab_boleto').removeClass("active");
        $('#tab_mensalidade').removeClass("active");
        $('#tab_mensalidade').addClass("active");
    });

    $(document).delegate('#quantidade_alunos', 'change', function(event)
    {
        $(".carregandoInformacoesCartao").html("<div class='loading'><center><i class='fa fa-spinner fa-5x fa-spin' aria-hidden='true'></i></center></div>");
        $('.exibeValores').remove();

        qtd_aluno         = moeda2float($(this).val());
        valor_mensalidade = moeda2float($('#valor_mensalidade').val());
        taxa_cartao       = $('#taxa_cartao').val();

        valor_mensal      = (valor_mensalidade * taxa_cartao * 0.01) * qtd_aluno;
        valor_anual       = ((valor_mensalidade * taxa_cartao * 0.01) * qtd_aluno) * 12;

        $('.exibe_mensal').append('<span class="exibeValores" style="font-size: 19px;">R$ '+float2moeda(valor_mensal)+'</span>');
        $('.exibe_anual').append('<span class="exibeValores" style="font-size: 19px;">R$ '+float2moeda(valor_anual)+'</span>');

        $.fn.calculaDadosFinanceiros(qtd_aluno, valor_mensal, valor_anual);
    });

    $.fn.calculaDadosFinanceiros=function(qtd_alunos, valor_mensal, valor_anual)
    {
        $('.loading').remove();
        $(".dados_registro_cartao").remove();

        valorMensal = qtd_alunos * 4;
        valorAnual = (qtd_alunos * 4) * 12;

        valorMensalProesc = valor_mensal - valorMensal;
        valorAnualProesc  = valor_anual - valorAnual;

        tabela = '<div class="dados_registro_cartao">\
                    <table class="table">\
                        <tr>\
                            <center><b>INFORMAÇÕES FINANCEIRAS DO BOLETO PROESC.COM</b></center>\
                        </tr>\
                        <tr>\
                            <th class="center">TAXA DO BOLETO</th>\
                            <th class="center">QUANTIDADE DE ALUNOS</th>\
                            <th class="center">MÊS/ANO</th>\
                        </tr>\
                        <tr>\
                            <td><center>R$ 4,00</center></td>\
                            <td><center>'+qtd_alunos+'</center></td>\
                            <td><center><span style="font-size:19px;">R$ '+float2moeda(valorMensal)+' / R$ '+float2moeda(valorAnual)+'</span></center></td>\
                        </tr>\
                    </table>\
                    <br>\
                    <div class="alert alert-success" role="alert" style="font-size: 19px;width: 48%;color: #fff !important;float: right;">\
                        <center><b>Ecônomia gerada pelo boleto Proesc.com</b></center><br />\
                        <p>Ecônomia mensal: <span style="font-size: 25px !important;font-weight: bold;">R$ '+float2moeda(valorMensalProesc)+'</span></p>\
                        <p>Ecônomia anual : <span style="font-size: 25px !important;font-weight: bold;">R$ '+float2moeda(valorAnualProesc)+'</span></p>\
                    </div>\
                </div>';

        $('.lista_registros_cartao').append(tabela);
    }

    $(document).delegate('#tab_boleto', 'click', function(event)
    {
        $('.orcamento_cliente').hide(200);
        $('.calculo_boleto').show(200);

        $('#tab_mensalidade').removeClass("active");
        $('#tab_boleto').removeClass("active");
        $('#tab_boleto').addClass("active");
    });

    $(document).delegate('#qtd_parcelas', 'change', function(event)
    {
        qtd = $(this).val();

        valor_parcela = $('#valor_plano').val() * 2 / qtd;
        $('#parcela_implantacao').val(float2moeda(valor_parcela));
    });

	$(".monetario").maskMoney();
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



       alert(media(valores))

        $.fn.calculaAjuste($('#valor_plano').val(), '01', $('#tipo_cobranca').val());
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

    $(document).delegate('#dia05', 'click', function(event)
    {
        $("#dia05").removeClass('btn-default');
        $("#dia05").addClass('btn-success');
        $(".data_pagamento").val('05');

        $("#dia01").removeClass('btn-success');
        $("#dia01").addClass('btn-default');
        $("#dia15").removeClass('btn-success');
        $("#dia15").addClass('btn-default');
        $("#dia25").removeClass('btn-success');
        $("#dia25").addClass('btn-default');

        $.fn.calculaAjuste($('#valor_plano').val(), '05', $('#tipo_cobranca').val());
    });
    $(document).delegate('#dia15', 'click', function(event)
    {
        $("#dia15").removeClass('btn-default');
        $("#dia15").addClass('btn-success');
        $(".data_pagamento").val('15');
        $("#dia01").removeClass('btn-success');
        $("#dia01").addClass('btn-default');
        $("#dia05").removeClass('btn-success');
        $("#dia05").addClass('btn-default');
        $("#dia25").removeClass('btn-success');
        $("#dia25").addClass('btn-default');

        $.fn.calculaAjuste($('#valor_plano').val(), '15', $('#tipo_cobranca').val());
    });
    $(document).delegate('#dia25', 'click', function(event)
    {
        $("#dia25").removeClass('btn-default');
        $("#dia25").addClass('btn-success');
        $(".data_pagamento").val('25');
        $("#dia01").removeClass('btn-success');
        $("#dia01").addClass('btn-default');
        $("#dia05").removeClass('btn-success');
        $("#dia05").addClass('btn-default');
        $("#dia15").removeClass('btn-success');
        $("#dia15").addClass('btn-default');

        $.fn.calculaAjuste($('#valor_plano').val(), '25', $('#tipo_cobranca').val());
    });

    $.fn.calculaAjuste=function(valor_plano, data_pagamento, tipo)
    {
    	$(".carregandoInformacoes").html("<div class='loading'><center><i class='fa fa-spinner fa-5x fa-spin' aria-hidden='true'></i></center></div>");
    	$(".dados_registro").remove();

        $('#valor_plano').parents('.form-group').removeClass('has-error');
        $('#valor_plano').parents('.form-group').removeClass('has-success');
        $.ajax({
            url: '/calcula_ajuste_detalhado',
            type: 'GET',
            dataType: 'JSON',
            data: {
                valor_plano    : valor_plano,
                data_pagamento : data_pagamento,
                tipo           : tipo
            },
        })
        .done(function(retorno) {
        	$(".loading").remove();

        	//SEMESTRAL
        	if(tipo == 2){
        		valor_plano         = parseInt($('#valor_plano').val()) * 6;
        		valor_total         = valor_plano + parseInt($('#parcela_implantacao').val()) + retorno.data.valor_diferenca;
        		desconto            = valor_total * 0.13;
        		percentual_desconto = 13;
        		nome_tipo           = 'semestral';
    		//ANUAL
        	}else if(tipo == 3){
        		valor_plano         = parseInt($('#valor_plano').val()) * 12;
        		valor_total         = valor_plano + parseInt($('#parcela_implantacao').val()) + retorno.data.valor_diferenca;
        		desconto            = valor_total * 0.16;
        		percentual_desconto = 16;
        		nome_tipo           = 'anual';
        	//MENSAL
        	}else{
        		valor_plano         = parseInt($('#valor_plano').val());
        		valor_total         = valor_plano + parseInt($('#parcela_implantacao').val()) + retorno.data.valor_diferenca;
        		desconto            = valor_total * 0.1;
        		percentual_desconto = 10;
        		nome_tipo           = 'mensal';
        	}

        	var valor_final         = valor_total;
        	var total_desconto      = desconto;
        	var valor_atualizado    = valor_total - desconto;
        	var media               = ($('#valor_plano').val() * 0.9) / retorno.data.qtd_aluno;

            html = '<div class="dados_registro">\
	            		<table class="table">\
	                        <tr colspan=3><center><b>ORÇAMENTO PARA O CLIENTE</b></center></tr>\
	                        <tr>\
	                            <td colspan=2>Valor do plano '+nome_tipo+'</td>\
	                            <td style="text-align: right;">R$ '+float2moeda(valor_plano)+'</td>\
	                        </tr>\
	                        <tr>\
	                            <td colspan=2>Valor médio por aluno</td>\
	                            <td style="text-align: right;">R$ '+float2moeda(media.toFixed(2))+'</td>\
	                        </tr>\
	                        <tr>\
	                            <td colspan=2>Valor por dia (valor do plano / 30)</td>\
	                            <td style="text-align: right;">R$ '+float2moeda(retorno.data.valor_diario)+'</td>\
	                        </tr>\
	                        <tr>\
	                            <td colspan=2>Dias de diferença</th>\
	                            <td style="text-align: right;">'+retorno.data.diferenca_dias+' dias</th>\
	                        </tr>\
	                        <tr>\
	                            <td colspan=2>Valor adicional (valor por dia X dias de diferença)</td>\
	                            <td style="text-align: right;">R$ '+float2moeda(retorno.data.valor_diferenca)+'</td>\
	                        </tr>\
	                        <tr>\
	                            <td colspan=2>Parcela da taxa de implantação</td>\
	                            <td style="text-align: right;">R$ '+$('#parcela_implantacao').val()+'</td>\
	                        </tr>\
	                        <tr>\
	                            <td colspan=2>Valor total para esta data</td>\
	                            <td style="text-align: right;">R$ '+float2moeda(valor_final)+'</td>\
	                        </tr>\
	                        <tr>\
	                            <td colspan=2>Desconto</td>\
	                            <td style="text-align: right;">R$ - '+float2moeda(desconto)+' ('+percentual_desconto+'%)</td>\
	                        </tr>\
	                        <tr>\
	                            <td colspan=2 class="left" style="text-align: right;">VALOR FINAL ATUALIZADO COM DESCONTO</td>\
	                            <td style="font-size: 25px;text-align: right;">R$ '+float2moeda(valor_atualizado)+'</td>\
	                        </tr>\
	                	</table>\
	                </div>';

            $('.lista_registros').append(html);
        });
    }
</script>
</body>

<!-- Mirrored from proesc.com/calculadora by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 21:38:32 GMT -->
</html>
