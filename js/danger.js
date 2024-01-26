toast2 = document.querySelector(".show2")
      closeIcon2 = document.querySelector(".close2"),
      progress2 = document.querySelector(".progress2");

      let timer5, timer6;
      
        toast2.classList.add("active");
        progress2.classList.add("active");

        timer5 = setTimeout(() => {
            toast2.classList.remove("active");
        }, 5000); //1s = 1000 milliseconds

        timer6 = setTimeout(() => {
          progress2.classList.remove("active");
        }, 5300);

      closeIcon2.addEventListener("click", () => {
        toast2.classList.remove("active");
        
        setTimeout(() => {
          progress2.classList.remove("active");
        }, 300);

        clearTimeout(timer5);
        clearTimeout(timer6);
      });