let categories = document.querySelector('#categories');
let writers = document.querySelector('#writers');


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


writers.addEventListener('change', ()=>{
    let news = document.querySelectorAll(".news-all");

    if(writers.value == 0){
        news.forEach((e)=>{
            e.style.display = 'flex';
        });
        
    }else{
        news.forEach((e)=>{
            e.style.display = 'none';
        });
        
        document.querySelectorAll(`div[writer="${writers.value}"]`).forEach((e)=>{
            e.style.display = 'flex';
        });
    }

});


