<script>
    /* Selectors */
    const html = document.querySelector("html");
    const body = html.querySelector("body");
    const copyEvents = body.querySelectorAll("a.copy-event");
    const getMenuAside = body.querySelector("li.menu");
    const AboutContext = body.querySelector(".blurb > pre");
    const getAboutContextBtn = body.querySelector("a#about-context-btn");
<?php if($show) { ?>
    const userLike = document.querySelector('.user-like');
    const likeCount = userLike.querySelector("code");

    const commentContentNew = document.querySelector('.comment-content-new');
    const addCommentBtn = document.querySelector('.add-comment-btn');
    const newCommentInput = document.querySelector('#new-comment');
    const newUsernameInput = document.querySelector('#new-username');
<?php } ?>

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
<?php if($show) { ?>
    let postComment = false;
    let addUserLike = <?php if(in_array(__('designs.title_'.$id), session()->get('user.likes'))){ ?> false <?php }else{ ?> true <?php } ?>;

    <?php if(in_array(__('designs.title_'.$id), session()->get('user.likes'))){ ?>
        likeCount.textContent = parseInt(likeCount.textContent)+1
    <?php } ?>
<?php } ?>

    /* Get email event */
    const setCopProperty = async (index, value) => {
        try {
            if (navigator.clipboard && window.isSecureContext) {
                await navigator.clipboard.writeText(value);
                copyEvents[index].setAttribute("data-tooltip", "{{__('context.copy')}}");
                setTimeout(()=> {
                    copyEvents[index].setAttribute("data-tooltip", value);
                },2000);
            } else {
                throw new Error('Clipboard API unavailable');
            }
        } catch (err) {
            console.error('Failed to read clipboard contents: ', err.message);
        }
    };

    <?php if($show) { ?>

    /* Show/Hide comments */
    const setComments = (id) => {
        const comments = body.querySelector("#comments-<?=$id?>").querySelectorAll(".set-comment-content");
        const hideComments = comments[0].classList.contains("hidden-comments");

        comments.forEach(comment => {
            hideComments ? comment.classList.remove("hidden-comments") : comment.classList.add("hidden-comments");
        });
    }

    /* Permission for new comment */
    const commentInputListener = ()=> {
        if(newCommentInput.value == "" || newUsernameInput.value == ""){
            addCommentBtn.classList.remove("add-svg");
            postComment = false;
        }else{
            addCommentBtn.classList.add("add-svg");
            postComment = true;
        }
    };

    /* Add a new coment */
    const addComment = async () => {
        if(postComment){
            fetch("{{ route('user.comment') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    design: "{{ __('designs.title_'.$id) }}",
                    username: newUsernameInput.value,
                    comment: newCommentInput.value,
                    lang: "<?=session()->get('lang')?>",
                })
            })
            .then(res => res.json())
            .then(data => {
                    console.log(data)
                    const newComment = document.createElement('div');
                    newComment.classList.add("comment-content");
                    newComment.classList.add("set-comment-content");

                    const newCommentContext = document.createElement('pre');
                    newCommentContext.innerHTML = `<strong class="author-name">${newUsernameInput.value}</strong>${newCommentInput.value}`;
                    newComment.appendChild(newCommentContext);

                    const newTimeStamp = document.createElement('h4');
                    newTimeStamp.classList.add("time-stamp");
                    newTimeStamp.textContent = '<?=date('d-m-Y')?>'
                    newComment.appendChild(newTimeStamp);

                    commentContentNew.after(newComment);
                    newCommentInput.value = "";
                }
            )
            .catch(err => console.error(err));
        }
    };

    /* Add a new like */
    const addLike = async () => {
        fetch("{{ route('user.like') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                design: "{{ __('designs.title_'.$id) }}",
                username: newUsernameInput.value,
                add: addUserLike
            })
        })
        .then(res => res.json())
        .then(data => {
                console.log(data)
                userLike.classList.contains("clicked") ? userLike.classList.remove("clicked") : userLike.classList.add("clicked");
                likeCount.textContent = (userLike.classList.contains("clicked") ? parseInt(likeCount.textContent)+1 : parseInt(likeCount.textContent)-1).toString();
            }
        )
        .catch(err => console.error(err));
    };
    <?php } ?>

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
