<?php $this->view("minima/header", $data); ?>

<div style="min-height: 400px;" class="section">
    <header class="background-white margin-bottom-20">
        <div class="line text-center">
            <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">
                <?=$data['post']->title;?>
            </h1>
            <div>
                <img src="<?=ROOT . $data['post']->image;?>" alt="">
            </div>
            <div>
                <?=$data['post']->description;?>
            </div>
        </div>
    </header>

    <section class="background-white">
        <div class="s-12 m-12 l-4 center">
            <?php if(isset($_SESSION['error']) && $_SESSION['error'] !== ''): ?>
                <div style="color: red; padding: 5px; background-color:rgba(105, 27, 85, 0.2); margin-bottom: 10px;
                text-align:center;">
                    <?php check_message(); ?>
                </div>
            <?php endif; ?>           
        </div>
    </section>
</div>

<?php $this->view("minima/footer", $data); ?>