// let current_usertype = document.querySelector("#current_usertype").value;
// let options = document.querySelectorAll("#usertype>option");
let img = document.querySelector("#profile-avatar");
let img_src = img.src;
let input = document.querySelector("#avatar");


// options.forEach((e)=>{
//     if(e.value == current_usertype){
//         e.style.display = 'none';
//     }
// });


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






