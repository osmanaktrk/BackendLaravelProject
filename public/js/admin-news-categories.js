let editBtns = document.querySelectorAll('.category-edit-btn');
let categories = document.querySelector("#news-category");




editBtns.forEach((btn)=>{
    btn.addEventListener('click', (e)=>{
        let editForm = e.target.nextSibling.nextSibling;

        editForm.style.display = 'inline-block'
        
        let cancel = e.target.nextSibling.nextSibling.lastChild.previousSibling;
        cancel.addEventListener('click', ()=>{
            editForm.style.display = 'none'
        });
        
    });
});


categories.addEventListener('change', ()=>{
    let news = document.querySelectorAll('.category-news');
    if(categories.value == 0){
       news.forEach((e)=>{
            e.style.display = 'block'
       });

    }else{
        news.forEach((e)=>{
            e.style.display = 'none'
       });
        document.querySelectorAll(`div[category="${categories.value}"]`).forEach((e)=>{
            e.style.display = 'block'
        });
    }
});


