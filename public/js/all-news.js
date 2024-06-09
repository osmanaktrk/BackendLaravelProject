let checkbox_all = document.querySelector("#all-categories");
let checkboxes = document.querySelectorAll(".input-categories");
let allNews = document.querySelectorAll(".all-news");


if(checkbox_all.checked){
    checkboxes.forEach((e)=>{
        e.checked = true;
    });
    
}



checkbox_all.addEventListener('change', ()=>{
    if(checkbox_all.checked){
        checkboxes.forEach((e)=>{
            e.checked = true;
        });

        allNews.forEach((news)=>{
            news.style.display = 'flex';
        });
        
    }else{
        checkboxes.forEach((e)=>{
            e.checked = false;
        });

        allNews.forEach((news)=>{
            news.style.display = 'none';
        });
    }
});


checkboxes.forEach((checkbox)=>{
    checkbox.addEventListener('change', ()=>{
        
        let allChecked = true;
        
        checkboxes.forEach((e)=>{
            if(!e.checked){
                allChecked = false;
            }
        });

        checkbox_all.checked = allChecked;

    });
});


checkboxes.forEach((checkbox)=>{
    checkbox.addEventListener('change', ()=>{
        

        allNews.forEach((news)=>{
            
            if(news.getAttribute('category') == checkbox.name){
                
                if(!checkbox.checked){
                    news.style.display = "none";
            
                }else{
                    news.style.display = "flex";
                }
                
            }
        });
        

        
    });
});


