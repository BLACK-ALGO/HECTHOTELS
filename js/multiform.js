var Form1 = document.getElementById("form1");
        var Form2 = document.getElementById("form2");
        var Form3 = document.getElementById("form3");

        var Next = document.getElementById("Next");
        var Next2 = document.getElementById("Next2");
        var Back1 = document.getElementById("Back1");
        var Back2 = document.getElementById("Back2");

        var progress = document.getElementById("progress");
       
        Next.onclick = function(){
            Form1.style.left = "-450px";
            Form2.style.left = "40px";
            progress.style.left = "120px"
        }

        Back1.onclick = function(){
            Form1.style.left = "40px";
            Form2.style.left = "450px";
            progress.style.left = "-120px"
        }
        
        Next2.onclick = function(){
            Form2.style.left = "-450px";
            Form3.style.left = "40px";
            progress.style.left = "360px"
        }

        Back2.onclick = function(){
            Form2.style.left = "40px";
            Form3.style.left = "450px";
            progress.style.left = "240px"
        }