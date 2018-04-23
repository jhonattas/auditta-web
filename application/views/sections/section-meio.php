<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="w-section meio">
    <div class="w-container">
      <div class="conteudo-meio formulario">
        <div class="formulario">
          <div class="w-row">

            <div class="w-col w-col-6 w-col-stack">
              <h1>Satisfeito com o plano de telefonia da sua empresa?</h1>
              <div class="slapsh">
                <div class="w-row">
                  <div class="w-col w-col-8">
                    <div class="text-h2">
                      <h2>compare sua <span class="destaque2">operadora!</span><span class="destaque2"></span></h2>
                    </div>
                  </div>
                  <div class="w-col w-col-4">
                    <div class="box-splash"><img src="<?php echo base_url('assets/img/splash-mob.png');?>"> </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="w-col w-col-6 w-col-stack">
              <div class="step1">
                <div class="w-form">
                  <div class="modal_abandono_inativo" id="modal_abandono">
                    <div class="fundo"></div>
                    <div id="contato" class="formulario">
                      <div class="fechar_abandono">&times;</div>
                      <div class="titulo_abandono">Temos uma oferta especial para você!</div>
                      <form id="lead-data" action="https://api.soucriador.com.br/leads" method="post">
                        <input type="hidden" name="original_referer" value="g3?1+rMalQbm8ke+yvNA06nVw==" />
                        <input type="hidden" name="referer" value="g3?uQBJ6Bo6nJvxiRuJMQ2R3elGNhtM33vyN/W62GYl7gsW4CRcZub0UKfRdJjwh3og" />
                        <input type="hidden" name="optin" id="optin" value="1" />
                        <input type="hidden" name="product_id" value="356" />
                        <input type="hidden" name="sucesso" value="https://auditta.com.br/obrigado?z=1" />
                        <input type="hidden" name="instance_id" value="2">
                        <input type="hidden" name="lightbox" id="lightbox" value="0">

                        <div class="form-campos">
                          <p>Receba o contato de um consultor:</p>
                          <?php require_once('home/lista-operadoras.php');?>

                          <div style="padding:5px;">
                            <div class="duplo">
                              <div class="w-row">
                                <div class="w-col w-col-6 box-left">
                                  <label class="label" for="possui_cnpj_sim">Possui CNPJ?</label>
                                  <div class="label_cnpj" style="width: 25%; float: left;">
                                    <label class="w-form-label" for="possui_cnpj_sim" style="color: #FFF;">
                                      <input class="w-checkbox-input bt-check" id="possui_cnpj_sim" type="radio" name="possui_cnpj" value="Sim" required> Sim
                                    </label>
                                  </div>
                                  <div class="label_cnpj" style="width: 25%; float: left;">
                                    <label class="w-form-label" for="possui_cnpj_nao" style="color: #FFF;">
                                      <input class="w-checkbox-input bt-check" id="possui_cnpj_nao" type="radio" name="possui_cnpj" value="Não" required> Não
                                    </label>
                                  </div>
                                </div>

                                <div class="w-col w-col-6">
                                  <div class="direita showbusiness">
                                    <label class="label" for="nome_empresa">Empresa</label>
                                    <input class="w-input campos" id="nome_empresa" type="text" placeholder="Nome da empresa" name="nome_empresa" value="" data-name="nome_empresa" required="required">
                                  </div>
                                </div>
                              </div> <!-- end w-row -->
                            </div>

                            <label class="label" for="pessoa_de_contato">Nome Completo</label>
                            <input class="w-input campos" id="pessoa_de_contato" type="text" placeholder="Nome completo" name="pessoa_de_contato" value="" data-name="pessoa_de_contato" required="required">

                            <div class="duplo">
                              <div class="w-row">
                                <div class="w-col w-col-6 box-left">
                                  <div class="esquerda">
                                    <label class="label" for="email">Email</label>
                                    <input class="w-input campos" id="email" type="email" placeholder="Email para contato" name="email" data-name="email" value="" required="required">
                                  </div>
                                </div>

                                <div class="w-col w-col-6">
                                  <div class="direita">
                                    <label class="label" for="telefone2">Telefone Celular</label>
                                    <input class="w-input campos" id="telefone2" type="text" placeholder="(xx) xxxxx-xxxx" name="telefone2" data-type="phonesBR" value="" data-validator-ism="true" required="required">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <?php require_once('home/lista-linhas.php'); ?>

                          <div style="padding:5px;">
                            <input class="w-button bt-form" type="submit" value="analisar">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>