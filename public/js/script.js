    /* Menu button events */
getMenuAside && getMenuAside.addEventListener("click", (event) => {
    event.stopPropagation();
    body.classList.add("is-menu-visible");
});

html.addEventListener("click", () => {
    body.classList.contains("is-menu-visible") ? body.classList.remove("is-menu-visible") : null;
});

    /* Language button events */
const languageForm = (lang)=>body.querySelector(`form#form_${lang}`).submit();
