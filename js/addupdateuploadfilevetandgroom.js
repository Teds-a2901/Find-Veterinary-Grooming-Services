//declearing html elements

const imgDiv = document.querySelector('.profile-pic-div');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');

//if user hover on img div 

imgDiv.addEventListener('mouseenter', function(){
    uploadBtn.style.display = "block";
});

//if we hover out from img div

imgDiv.addEventListener('mouseleave', function(){
    uploadBtn.style.display = "none";
});

//lets work for image showing functionality when we choose an image to upload

//when we choose a foto to upload

file.addEventListener('change', function(){
    //this refers to file
    const choosedFile = this.files[0];

    if (choosedFile) {

        const reader = new FileReader(); //FileReader is a predefined function of JS

        reader.addEventListener('load', function(){
            img.setAttribute('src', reader.result);
        });

        reader.readAsDataURL(choosedFile);

       
    }

});
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
const imgDiv3 = document.querySelector('.services-pic3');
const img3 = document.querySelector('#photo3');
const file3 = document.querySelector('#file3');
const uploadBtn3 = document.querySelector('#uploadBtn3');

imgDiv3.addEventListener('mouseenter', function(){
    uploadBtn3.style.display = "block";
});
imgDiv3.addEventListener('mouseleave', function(){
    uploadBtn3.style.display = "none";
});
file3.addEventListener('change', function(){
    //this refers to file
    const choosedFile3 = this.files[0];

    if (choosedFile3) {

        const reader3 = new FileReader(); //FileReader is a predefined function of JS

        reader3.addEventListener('load', function(){
            img3.setAttribute('src', reader3.result);
        });

        reader3.readAsDataURL(choosedFile3);

       
    }

});
const imgDiv4 = document.querySelector('.services-pic4');
const img4 = document.querySelector('#photo4');
const file4 = document.querySelector('#file4');
const uploadBtn4 = document.querySelector('#uploadBtn4');

imgDiv4.addEventListener('mouseenter', function(){
    uploadBtn4.style.display = "block";
});
imgDiv4.addEventListener('mouseleave', function(){
    uploadBtn4.style.display = "none";
});
file4.addEventListener('change', function(){
    //this refers to file
    const choosedFile4 = this.files[0];

    if (choosedFile4) {

        const reader4 = new FileReader(); //FileReader is a predefined function of JS

        reader4.addEventListener('load', function(){
            img4.setAttribute('src', reader4.result);
        });

        reader4.readAsDataURL(choosedFile4);

       
    }

});
const imgDiv5 = document.querySelector('.services-pic5');
const img5 = document.querySelector('#photo5');
const file5 = document.querySelector('#file5');
const uploadBtn5 = document.querySelector('#uploadBtn5');

imgDiv5.addEventListener('mouseenter', function(){
    uploadBtn5.style.display = "block";
});
imgDiv5.addEventListener('mouseleave', function(){
    uploadBtn5.style.display = "none";
});
file5.addEventListener('change', function(){
    //this refers to file
    const choosedFile5 = this.files[0];

    if (choosedFile5) {

        const reader5 = new FileReader(); //FileReader is a predefined function of JS

        reader5.addEventListener('load', function(){
            img5.setAttribute('src', reader5.result);
        });

        reader5.readAsDataURL(choosedFile5);

       
    }

});
const imgDiv6 = document.querySelector('.services-pic6');
const img6 = document.querySelector('#photo6');
const file6 = document.querySelector('#file6');
const uploadBtn6 = document.querySelector('#uploadBtn6');

imgDiv6.addEventListener('mouseenter', function(){
    uploadBtn6.style.display = "block";
});
imgDiv6.addEventListener('mouseleave', function(){
    uploadBtn6.style.display = "none";
});
file6.addEventListener('change', function(){
    //this refers to file
    const choosedFile6 = this.files[0];

    if (choosedFile6) {

        const reader6 = new FileReader(); //FileReader is a predefined function of JS

        reader6.addEventListener('load', function(){
            img6.setAttribute('src', reader6.result);
        });

        reader6.readAsDataURL(choosedFile6);

       
    }

});