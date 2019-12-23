$( document ).ready(function(){

    //$("td>button").tooltip();

    /**
    * aplicando máscara aos capos
    **/
    $('#ram_celular').mask('0 0000-0000');
    $('#ram_telefone').mask('0000-0000');
    $('#ram_numero').mask('0000');

    /**
    * função para selecionar os departamentos
    * baseado na secretaria escolhida
    **/
    $('body').on('change', '#ram_secretaria', function(){

      let sec = $('#ram_secretaria').val();

      switch(sec){
        case 'Administração':
          $('#ram_setor').html(
            '<option value="CPD">CPD</option>' +
            '<option value="Gabinete">Gabinete</option>' +
            '<option value="Administrativo">Administrativo</option>' +
            '<option value="Almoxarifado">Almoxarifado</option>' +
            '<option value="Compras">Compras</option>' +
            '<option value="Contratos">Contratos</option>' +
            '<option value="Departamento Pessoal">Departamento Pessoal</option>' +
            '<option value="Licitação">Licitação</option>' +
            '<option value="Patrimônio">Patrimônio</option>' +
            '<option value="PROCON">PROCON</option>' +
            '<option value="Protocolo">Protocolo</option>' +
            '<option value="Sindicância">Sindicância</option>'
          );
        break;
        case 'Gabinete':
          $('#ram_setor').html(
            '<option value="Administrativo">Administrativo</option>' +
            '<option value="Assessoria do Gabinete">Assessoria do Gabinete</option>' +
            '<option value="Controladoria Geral">Controladoria Geral</option>' +
            '<option value="Imprensa">Imprensa</option>' +
            '<option value="Junta Militar">Junta Militar</option>' +
            '<option value="Ouvidoria">Ouvidoria</option>' +
            '<option value="Prefeito">Prefeito</option>' +
            '<option value="Procuradoria Geral">Procuradoria Geral</option>' +
            '<option value="Superintendência de Governo">Superintendência de Governo</option>'
          );
        break;
        case 'Agricultura':
          $('#ram_setor').html(
            '<option value="Administrativo">Administrativo</option>'
          );
        break;
        case 'Turismo':
          $('#ram_setor').html(
            '<option value="Administrativo">Administrativo</option>'
          );
        break;
        case 'Fazenda':
          $('#ram_setor').html(
            '<option value="Contabilidade">Contabilidade</option>' +
            '<option value="Contador">Contador</option>' +
            '<option value="Fiscalização">Fiscalização</option>' +
            '<option value="Tesouraria">Tesouraria</option>' +
            '<option value="Tributação">Tributação</option>'
          );
        break;
        case 'Assistência Social':
          $('#ram_setor').html(
            '<option value="Administrativo">Administrativo</option>' +
            '<option value="Albergue">Albergue</option>' +
            '<option value="Conselho Tutelar">Conselho Tutelar</option>' +
            '<option value="CRAS 1">CRAS 1</option>' +
            '<option value="CRAS 2">CRAS 2</option>' +
            '<option value="CRAS 3">CRAS 3</option>' +
            '<option value="CREAS">CREAS</option>'
          );
        break;
        case 'Educação':
          $('#ram_setor').html(
            '<option value="ADMINISTRATIVO">ADMINISTRATIVO</option>' +
            '<option value="ALMOXARIFADO">ALMOXARIFADO</option>' +
            '<option value="CME. AGRICOLA ULISSES GUIMARÃES">CME. AGRICOLA ULISSES GUIMARÃES</option>' +
            '<option value="CME. ANTENOR SOARES">CME. ANTENOR SOARES</option>' +
            '<option value="CME. ATACILIO DE SOUZA">CME. ATACILIO DE SOUZA</option>' +
            '<option value="CME. AYRTON SENNA">CME. AYRTON SENNA</option>' +
            '<option value="CME. CECÍLIA MARIA DE BARCELLOS">CME. CECÍLIA MARIA DE BARCELLOS</option>' +
            '<option value="CME. DÉCIO BURALI">CME. DÉCIO BURALI</option>' +
            '<option value="CME. DIVA MARTINS JUNQUEIRA">CME. DIVA MARTINS JUNQUEIRA</option>' +
            '<option value="CME. DOM BOSCO">CME. DOM BOSCO</option>' +
            '<option value="CME. DONA MARIQUINHA TAVARES">CME. DONA MARIQUINHA TAVARES</option>' +
            '<option value="CME. FABIO DINIZ JUNQUEIRA">CME. FABIO DINIZ JUNQUEIRA</option>' +
            '<option value="CME. FAUSTO EUGÊNIO MASSON">CME. FAUSTO EUGÊNIO MASSON</option>' +
            '<option value="CME. FUTURO BRILHANTE">CME. FUTURO BRILHANTE</option>' +
            '<option value="CME. GENTILA SUSIN MURARO">CME. GENTILA SUSIN MURARO</option>' +
            '<option value="CME. IRMÃ MARIS STELLA">CME. IRMÃ MARIS STELLA</option>' +
            '<option value="CME. JESU PIMENTA DE SOUSA">CME. JESU PIMENTA DE SOUSA</option>' +
            '<option value="CME. JOANA D´ARC">CME. JOANA D´ARC</option>' +
            '<option value="CME. LUIZ SIMÕES MATIAS">CME. LUIZ SIMÕES MATIAS</option>' +
            '<option value="CME. MARIA ARLENE NEVES">CME. MARIA ARLENE NEVES</option>' +
            '<option value="CME. PROF. SEBASTIÃO RODRIGUES DOS SANTOS">CME. PROF. SEBASTIÃO RODRIGUES DOS SANTOS</option>' +
            '<option value="CME. PROF.ª TÂNIA ARANTES JUNQUEIRA">CME. PROF.ª TÂNIA ARANTES JUNQUEIRA</option>' +
            '<option value="CME. PROFª. JUCILEIDE PRAXEDES">CME. PROFª. JUCILEIDE PRAXEDES</option>' +
            '<option value="CME. PROFº. ISOLDE STORK">CME. PROFº. ISOLDE STORK</option>' +
            '<option value="CME. PROFº. JOÃO MARIA DO NASCIMENTO FILHO">CME. PROFº. JOÃO MARIA DO NASCIMENTO FILHO</option>' +
            '<option value="CME. PROFº. JOSÉ NODARI">CME. PROFº. JOSÉ NODARI</option>' +
            '<option value="CME. SILVIO PATERNEZ">CME. SILVIO PATERNEZ</option>' +
            '<option value="CME. TIA LINA">CME. TIA LINA</option>' +
            '<option value="DEPARTAMENTO PESSOAL">DEPARTAMENTO PESSOAL</option>' +
            '<option value="ENGENHARIA">ENGENHARIA</option>' +
            '<option value="GABINETE">GABINETE</option>' +
            '<option value="NUTRIÇÃO">NUTRIÇÃO</option>' +
            '<option value="PEDAGÓGICO">PEDAGÓGICO</option>' +
            '<option value="TRANSPORTE">TRANSPORTE</option>' 
          );
        break;
        case 'Meio Ambiente':
          $('#ram_setor').html(
            '<option value="Administrativo">Administrativo</option>'
          );
        break;
        case 'Coordenação e Planejamento':
          $('#ram_setor').html(
            '<option value="Administrativo">Administrativo</option>' +
            '<option value="Desenvolvimento Urbano">Desenvolvimento Urbano</option>' +
            '<option value="Projetos">Projetos</option>' +
            '<option value="Regularização Fundiária">Regularização Fundiária</option>'
          );
        break;
        case 'SERRAPREV':
          $('#ram_setor').html(
            '<option value="Administrativo">Administrativo</option>'
          );
        break;
        case 'Indústria e Comércio':
          $('#ram_setor').html(
            '<option value="Administrativo">Administrativo</option>' +
            '<option value="SINE">SINE</option>' 
          );
        break;
        case 'Infra-Estrutura':
          $('#ram_setor').html(
            '<option value="Administrativo">Administrativo</option>' +
            '<option value="Aeroporto">Aeroporto</option>' +
            '<option value="Engenharia">Engenharia</option>' +
            '<option value="Operacional">Operacional</option>' +
            '<option value="SUTRAV">SUTRAV</option>'
          );
        break;
        case 'RLZ':
          $('#ram_setor').html(
            '<option value="Administrativo">Administrativo</option>'
          );
        break;
        case 'Esporte':
          $('#ram_setor').html(
            '<option value="Administrativo">Administrativo</option>'
          );
        break;
        case 'Saúde':
          $('#ram_setor').html(
            '<option value="ADMINISTRATIVO">ADMINISTRATIVO</option>' +
            '<option value="ALMOXARIFADO SAUDE">ALMOXARIFADO SAUDE</option>' +
            '<option value="ATENÇÃO BÁSICA">ATENÇÃO BÁSICA</option>' +
            '<option value="CAPS">CAPS</option>' +
            '<option value="CENTRAL DE REGULAÇÃO">CENTRAL DE REGULAÇÃO</option>' +
            '<option value="CENTRO DE ESPECIALIDADES">CENTRO DE ESPECIALIDADES</option>' +
            '<option value="CENTRO DE REABILITACAO GENI BANDEIRA">CENTRO DE REABILITACAO GENI BANDEIRA</option>' +
            '<option value="CENTRO DE SAUDE">CENTRO DE SAUDE</option>' +
            '<option value="CTA SAE">CTA SAE</option>' +
            '<option value="DEPARTAMENTO PESSOAL">DEPARTAMENTO PESSOAL</option>' +
            '<option value="HOSPITAL MUNICIPAL ARLETE DAISY CICHETTI DE BRITO">HOSPITAL MUNICIPAL ARLETE DAISY CICHETTI DE BRITO</option>' +
            '<option value="PSF TRIANGULO">PSF TRIANGULO</option>' +
            '<option value="SAMU">SAMU</option>' +
            '<option value="UBS CENTRO II">UBS CENTRO II</option>' +
            '<option value="UNITAN">UNITAN</option>' +
            '<option value="USF ALTO DA BOA VISTA">USF ALTO DA BOA VISTA</option>' +
            '<option value="USF ALTOS DO TARUMA">USF ALTOS DO TARUMA</option>' +
            '<option value="USF BARCELONA">USF BARCELONA</option>' +
            '<option value="USF CENTRO">USF CENTRO</option>' +
            '<option value="USF COHAB">USF COHAB</option>' +
            '<option value="USF COHAB II">USF COHAB II</option>' +
            '<option value="USF JARDIM DOS IPES">USF JARDIM DOS IPES</option>' +
            '<option value="USF JARDIM EUROPA">USF JARDIM EUROPA</option>' +
            '<option value="USF JARDIM PARAISO">USF JARDIM PARAISO</option>' +
            '<option value="USF JARDIM PRESIDENTE">USF JARDIM PRESIDENTE</option>' +
            '<option value="USF JARDIM SANTA LUCIA">USF JARDIM SANTA LUCIA</option>' +
            '<option value="USF JARDIM SHANGRILA">USF JARDIM SHANGRILA</option>' +
            '<option value="USF JARDIM TANGARA">USF JARDIM TANGARA</option>' +
            '<option value="USF JARDIM TANGARA II">USF JARDIM TANGARA II</option>' +
            '<option value="USF MORADA DO SOL">USF MORADA DO SOL</option>' +
            '<option value="USF PARQUE FIGUEIRA">USF PARQUE FIGUEIRA</option>' +
            '<option value="USF PROGRESSO">USF PROGRESSO</option>' +
            '<option value="USF SANTA IZABEL!>USF SANTA IZABEL</option>' +
            '<option value="USF VILA ALTA">USF VILA ALTA</option>' +
            '<option value="USF VILA ARAPUTANGA ">USF VILA ARAPUTANGA</option>' +
            '<option value="USF VILA ESMERALDA">USF VILA ESMERALDA</option>' +
            '<option value="USF VILA GOIANIA">USF VILA GOIANIA</option>' +
            '<option value="USF VILA NAZARE">USF VILA NAZARE</option>' +
            '<option value="VIGILÂNCIA AMBIENTAL">VIGILÂNCIA AMBIENTAL</option>' +
            '<option value="VIGILÂNCIA EPIDEMIOLÓGICA">VIGILÂNCIA EPIDEMIOLÓGICA</option>' +
            '<option value="VIGILÂNCIA SANITÁRIA">VIGILÂNCIA SANITÁRIA</option>'
          );
        break;
        default:
          $('#ram_setor').html(
            '<option value="CPD">CPD</option>' +
            '<option value="Gabinete">Gabinete</option>' +
            '<option value="Administrativo">Administrativo</option>' +
            '<option value="Almoxarifado">Almoxarifado</option>' +
            '<option value="Compras">Compras</option>' +
            '<option value="Contratos">Contratos</option>' +
            '<option value="Departamento Pessoal">Departamento Pessoal</option>' +
            '<option value="Licitação">Licitação</option>' +
            '<option value="Patrimônio">Patrimônio</option>' +
            '<option value="PROCON">PROCON</option>' +
            '<option value="Protocolo">Protocolo</option>' +
            '<option value="Sindicância">Sindicância</option>'
          );
        break;

      } // fim switch

    }) //fim change function

})// *** ready function ***

/**
*
**/

    /**
    * função que carrega o script php de cadatro.php
    * sem a necessidade de abrir a página
    **/
    $("#formCadRamal").submit(function(e){   

      e.preventDefault(); //tirando o evento padrão de clique no botão

      let ramal      = $("#ram_numero").val();
      let telefone   = $("#ram_telefone").val();
      let celular    = $("#ram_celular").val();
      let secretaria = $("#ram_secretaria").val();
      let setor      = $("#ram_setor").val();
      let nome       = $("#ram_nomepessoa").val();

      let acao       = $("#formCadRamal").attr("acao");

      let id = $("#ram_id").val();

      if(!ramal && !telefone && !celular){
        swal("Preencha um desses campos","RAMAL / TELEFONE / CELULAR","info");
      } else {
        $.ajax({
            url: (acao == "cadastrar") ? "cadastro.php" : "editar.php",
            type: (acao == "cadastrar") ? "POST": "GET" ,
            data: (acao == "cadastrar") ? {
                ram_numero: ramal,
                ram_telefone: telefone,
                ram_celular: celular,
                ram_secretaria: secretaria,
                ram_setor: setor,
                ram_nomepessoa: nome
            } : {
                ram_id: id,
                ram_numero: ramal,
                ram_telefone: telefone,
                ram_celular: celular,
                ram_secretaria: secretaria,
                ram_setor: setor,
                ram_nomepessoa: nome
            },
            cache: false,
            success: function(dataResult){
                swal('Cadastro Realizado', 'O número de ramal foi inserido com sucesso!', 'success');
                $('input').val('');
            }
        })// ajax
      }// else

    })// submit form

    /**
    * Função que chama o arquivo deletar.php
    * após confirmação do usuário
    **/
    $('body').on('click','#btn_del', function(){
    //$('#btn_del').click(function(e){

        let c = confirm('==========================\nCONFIRMA EXCLUSÃO?\nApós confirma o registro será apagado.\n==========================');

        if( c == true){
            //    window.location.href = 'deletar.php?ram_id='+$(this).attr('idd');
            // } else {
            //     window.location.href = 'listarramal.php';
            // }

            let id = $(this).attr("idd");

            $.ajax({
                url: "deletar.php",
                type: "GET" ,
                data: { ram_id: id },
                //cache: false,
                success: function(dataResult){
                    //swal('Registro Deletado', 'O número de ramal foi inserido com sucesso!', 'info');
                    $("#delete"+id).hide('slow');
                }
            })// ajax

        }


    })// #btn_del cick