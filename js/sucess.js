toast1 = document.querySelector(".show1")
      closeIcon1 = document.querySelector(".close1"),
      progress1 = document.querySelector(".progress1");

      let timer3, timer4;
      
        toast1.classList.add("active");
        progress1.classList.add("active");

        timer3 = setTimeout(() => {
            toast1.classList.remove("active");
        }, 5000); //1s = 1000 milliseconds

        timer4 = setTimeout(() => {
          progress1.classList.remove("active");
        }, 5300);

      closeIcon1.addEventListener("click", () => {
        toast1.classList.remove("active");
        
        setTimeout(() => {
          progress1.classList.remove("active");
        }, 300);

        clearTimeout(timer3);
        clearTimeout(timer4);
      });