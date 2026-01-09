<script>
    /* Selectors */
    const html = document.querySelector("html");
    const body = html.querySelector("body");
    const copyEvents = body.querySelectorAll("a.copy-event");
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
    const phoneToCopy = "<?=$phone?>"
    getAboutContextBtn.textContent = "{{__('context.learn')}}";

    /* Get email event */
    const setCopProperty  = async (isPhone) => {
        try {
            if (navigator.clipboard && window.isSecureContext) {
                await navigator.clipboard.writeText(isPhone ? phoneToCopy : emailToCopy);
                copyEvents[isPhone ? 0 : 1].setAttribute("data-tooltip", "{{__('context.copy')}}");
                setTimeout(()=> {
                    copyEvents[isPhone ? 0 : 1].setAttribute("data-tooltip", isPhone ? phoneToCopy : emailToCopy);
                },2000);
            } else {
                throw new Error('Clipboard API unavailable');
            }
        } catch (err) {
            console.error('Failed to read clipboard contents: ', err.message);
        }
    };

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
