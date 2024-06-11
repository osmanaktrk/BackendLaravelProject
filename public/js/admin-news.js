let categories = document.querySelector('#categories');

categories.addEventListener('change', ()=>{
    let news = document.querySelectorAll(".news-all");

    if(categories.value == 0){
        news.forEach((e)=>{
            e.style.display = 'flex';
        });
        
    }else{
        news.forEach((e)=>{
            e.style.display = 'none';
        });
        
        document.querySelectorAll(`div[category="${categories.value}"]`).forEach((e)=>{
            e.style.display = 'flex';
        });
    }

});


