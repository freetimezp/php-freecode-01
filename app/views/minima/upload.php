<?php $this->view("minima/header", $data); ?>

<div style="min-height: 400px;" class="section">
    <header class="background-white margin-bottom-20">
        <div class="line text-center">
            <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">
                Upload Image
            </h1>
            <p class="margin-bottom-0 text-size-16 text-dark">You can upload your image here..</p>
        </div>
    </header>

    <section class="background-white">
        <div class="s-12 m-12 l-4 center">
            <form name="contactForm" class="customform" method="post">
                <div class="s-12">
                    <input name="title" class="subject" placeholder="Title" title="Title" type="text" required>
                    <p class="subject-error form-error">Please enter a title.</p>
                </div>
                <div class="s-12">
                    <input name="file" class="subject" type="file" required>
                    <p class="subject-error form-error">Please select you file.</p>
                </div>
                <div class="s-12">
                    <textarea name="description" class="required message" placeholder="Description" rows="3"></textarea>
                    <p class="message-error form-error">Please enter your description.</p>
                </div>
                <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Submit Button</button></div>
            </form>
        </div>
    </section>
</div>

<?php $this->view("minima/footer", $data); ?>