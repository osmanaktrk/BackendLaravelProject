let editBtns = document.querySelectorAll(".edit-request-btn");
let writers = document.querySelector('#writers');


editBtns.forEach((btn)=>{
    btn.addEventListener('click', (e)=>{
        let box = e.target.parentNode.parentNode.nextElementSibling;
        let cancel = e.target.parentNode.parentNode.nextElementSibling.firstElementChild.nextElementSibling.firstElementChild;

        box.style.display = "block";

        cancel.addEventListener('click', ()=>{
            box.style.display = 'none';
        });

    });
});



writers.addEventListener('change', ()=>{
    let requests = document.querySelectorAll(".request-container");

    if(writers.value == 0){
        requests.forEach((e)=>{
            e.style.display = 'flex';
        });
        
    }else{
        requests.forEach((e)=>{
            e.style.display = 'none';
        });
        
        document.querySelectorAll(`div[writer="${writers.value}"]`).forEach((e)=>{
            e.style.display = 'flex';
        });
    }

});