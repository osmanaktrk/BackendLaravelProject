let current_usertype = document.querySelector("#current_usertype").value;
let options = document.querySelectorAll("#usertype>option");
let img = document.querySelector("#profile-avatar");
let img_src = img.src;
let input = document.querySelector("#avatar");


options.forEach((e)=>{
    if(e.value == current_usertype){
        e.style.display = 'none';
    }
});


input.addEventListener("change", ()=>{
    let files = input.files;
    if(files){
        const fileReader = new FileReader();
        img.src = img_src;
        fileReader.onload = (e)=>{
            img.src = e.target.result;
        };
        fileReader.readAsDataURL(files[0]);

    }else{
        
    }



});






