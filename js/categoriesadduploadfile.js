
const imgDiv2 = document.querySelector('.services-pic');
const img2 = document.querySelector('#photo2');
const file2 = document.querySelector('#file2');
const uploadBtn2 = document.querySelector('#uploadBtn2');

imgDiv2.addEventListener('mouseenter', function(){
    uploadBtn2.style.display = "block";
});
imgDiv2.addEventListener('mouseleave', function(){
    uploadBtn2.style.display = "none";
});
file2.addEventListener('change', function(){
    //this refers to file
    const choosedFile2 = this.files[0];

    if (choosedFile2) {

        const reader2 = new FileReader(); //FileReader is a predefined function of JS

        reader2.addEventListener('load', function(){
            img2.setAttribute('src', reader2.result);
        });

        reader2.readAsDataURL(choosedFile2);

       
    }

});
