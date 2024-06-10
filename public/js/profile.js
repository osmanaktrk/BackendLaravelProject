
let img = document.querySelector("#profile-avatar");
let img_src = img.src;
let input = document.querySelector("#avatar");





input.addEventListener("change", ()=>{
    let file = input.files[0];
    if(file){
        const fileReader = new FileReader();
        
        fileReader.onload = (e)=>{
            img.src = e.target.result;
        };
        fileReader.readAsDataURL(file);

    }else{
        img.src = img_src;
    }



});






