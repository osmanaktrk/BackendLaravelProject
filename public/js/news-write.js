let cover = document.querySelector("#cover");
let img = document.querySelector('#cover-img');
let img_src = img.src;

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