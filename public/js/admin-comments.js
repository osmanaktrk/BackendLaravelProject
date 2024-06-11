let editCommentBtns = document.querySelectorAll('.edit-btn');
let searchByUser = document.querySelector('#search-username');
let searchByNews = document.querySelector('#search-news');


editCommentBtns.forEach((edit)=>{
    edit.addEventListener('click', (e)=>{
        let box = e.target.parentNode.parentNode.nextElementSibling;
        let cancel = e.target.parentNode.parentNode.nextElementSibling.firstElementChild.nextElementSibling.nextElementSibling;

        box.style.display = 'flex';

        cancel.addEventListener('click', ()=>{
            box.style.display = 'none';
        });
    });
});


searchByUser.addEventListener('input', ()=>{
    let comments = document.querySelectorAll('.comment-container-box');

    if(searchByUser.value == ""){
        comments.forEach((comment)=>{
            comment.style.display = 'flex';
        });
    }else{
        searchByUser.addEventListener('change', ()=>{
            comments.forEach((comment)=>{
                comment.style.display = 'none';
                if(comment.getAttribute('user').toLocaleLowerCase().includes(searchByUser.value.toString().toLowerCase())){
                    comment.style.display = "flex";
                }else if(searchByUser.value == ""){
                    comment.style.display = 'flex';
                }
            });

            
        });
    }


});

searchByNews.addEventListener('input', ()=>{
    let comments = document.querySelectorAll('.comment-container-box');

    if(searchByNews.value == ""){
        comments.forEach((comment)=>{
            comment.style.display = 'flex';
        });
    }else{
        searchByNews.addEventListener('change', ()=>{
            comments.forEach((comment)=>{
                comment.style.display = 'none';

                if(comment.getAttribute('news').toLocaleLowerCase().includes(searchByNews.value.toString().toLowerCase())){
                    comment.style.display = "flex";
                }else if(searchByNews.value == ""){
                    comment.style.display = 'flex';
                }
            });

            
        });
    }


});




