<script>

const pswrd_1 = document.getElementById("pwd");
const pswrd_2 = document.getElementById("rpwd");
var show = document.getElementsByClassName(".Show");
const errorText = document.getElementById("errorMsg")
const btn = document.getElementById("join");
function active2(){
        if(pswrd_2.value != ""){
                show.style.display = "block";
                show.onclick = function(){
                    if((pswrd_1.type == "password") && (pswrd_2.type == "password")){
                        pswrd_1.type = "text";
                        pswrd_2.type = "text";
                        show.innerh = "Hide";
                    }else{
                        pswrd_1.type = "password";
                        pswrd_2.type = "password";
                        show.textContent = "Show";
                    }
                }
        } else{
            show.style.display = "none";
        }
    }

    btn.onclick =   function() {
        if(pswrd_1.value != pswrd_2.value){
            errorText.style.display = "block"; 
            errorText.textContent = "Confirm Password not matching";
        }else{
            errorText.style.display = "block";
            errorText.textContent = "Not Confirm Password not matching";

        }
    }
</script>