<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">
      <div class="logo"><img src="<?php echo base_url('assets/img/logotipo.png');?>" width="147"> </div>
    </a>

    <button 
        class="navbar-toggler" 
        type="button" 
        data-toggle="collapse" 
        data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="<?php echo base_url() . 'servicos'; ?>" class="nav-link">
                    Serviços
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo base_url() . 'clientes'; ?>" class="nav-link">
                    Clientes
                </a>
            </li>
            
            <li class="nav-item">
                <a href="<?php echo base_url() . 'contato'?>" class="nav-link">
                    Contato
                </a>
            </li>
        </ul>
    </div>
</nav>