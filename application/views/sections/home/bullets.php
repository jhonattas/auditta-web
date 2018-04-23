<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="bullets">
    <h3>Compare e encontre o <span class="plano">plano ideal para sua empresa!</span></h3>
    <div class="all-bullets">
        <div class="w-row">
        <?php foreach ($bullets as $bullet):?>
            <div class="w-col w-col-4">
                <div class="box-bullet">
                    <div class="w-row">
                        <div class="w-col w-col-4">
                            <img class="img-icon" src="<?php echo $bullet->image; ?>">
                        </div>
                        <div class="w-col w-col-6">
                            <p class="text-bullet"><?php echo $bullet->text; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>