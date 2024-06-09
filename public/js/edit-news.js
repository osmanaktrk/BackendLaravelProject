
let cover = document.querySelector("#cover");
let img = document.querySelector('#cover-img');
let img_src = img.src;
let category = document.querySelector("#category")
let categoryValue = category.getAttribute("value");
let options = document.querySelectorAll("#category>option");




options.forEach((option) => {
    
    if(option.value == categoryValue){
        console.log(option.value);
        option.selected = "true";
    }
});




cover.addEventListener('change', ()=>{
    let files = cover.files;
    if(files){
        const fileReader = new FileReader();
        img.src = img_src;
        fileReader.onload = (e) =>{
            img.src = e.target.result;
        };
        fileReader.readAsDataURL(files[0]);
    }
});

