<script>
    /* Selectors */
    const html = document.querySelector("html");
    const body = html.querySelector("body");
    const getEmail = body.querySelector("a#get-email");
    const getMenuAside = body.querySelector("li.menu");
    const AboutContext = body.querySelector(".blurb > pre");
    const getAboutContextBtn = body.querySelector("a#about-context-btn");
<?php if($error) { ?>
    const errorContainer = body.querySelector(".error-container");
    const backHomeBtn = errorContainer.querySelector('a#back_home');

    /* Fallback function */
    backHomeBtn && backHomeBtn.addEventListener("click", ()=>errorContainer.remove());
<?php } ?>

    /* Variables */
    const emailToCopy = "<?=$email?>";
    getAboutContextBtn.textContent = "{{__('context.learn')}}";

    /* Get email event */
    getEmail && getEmail.addEventListener('click', async () => {
        try {
            if (navigator.clipboard && window.isSecureContext) {
                await navigator.clipboard.writeText(emailToCopy);
                getEmail.setAttribute("data-tooltip", "{{__('context.copy')}}");

                setTimeout(()=> {
                    getEmail.setAttribute("data-tooltip", emailToCopy);
                },2000);
            } else {
                throw new Error('Clipboard API unavailable');
            }
        } catch (err) {
            console.error('Failed to read clipboard contents: ', err.message);
        }
    });

    /* About button events */
    getAboutContextBtn && getAboutContextBtn.addEventListener("click", ()=>{
        if(AboutContext.classList.contains("hidden-context")){
            AboutContext.classList.remove("hidden-context");
            getAboutContextBtn.textContent = "{{__('context.okay')}}";
        }else{
            AboutContext.classList.add("hidden-context");
            getAboutContextBtn.textContent = "{{__('context.learn')}}";
        }
    });
</script>
