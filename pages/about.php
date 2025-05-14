<?php
    App_state::$page_title = App_state::$page_title. " : About";
?>
<div class="container-fluid py-5">
    <div class="row">
        <div class="col-3">
            <img src="./assets/about.jpg" alt="" class="img-fluid" style="border-radius: 50%;border:solid 20px #666666;">
        </div>
        <div class="col-7">
            <div class="py-4">
                <h2 class="text-center">Jerry Cenatus</h2>
                <p class="text-muted text-center">
                    Music Producer / Website Developer
                </p>
            </div>
            <div class="py-2">
                I’m exploring so many subjects that I can’t label myself. I’m a professional website developer, but sometimes I find myself as a DJ or a producer. I often ask myself big philosophical and existential questions like, 'What is my purpose?' Overall, I’m just having fun with existence! Welcome to my website!
            </div>
            <div class="py-2">
            I do a lot of creative activities. What can I say? I'm a curious guy.
            </div>
            <div class="py-2 text-center">
                <a href="<?=App_state::$instagram_link?>" target="_blank" class="btn btn-dark">Follow on instagram <i class="bi bi-instagram"></i></a>
                <a href="mailto:<?=App_state::$mail?>" class="btn btn-dark">Inbox <i class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>
</div>