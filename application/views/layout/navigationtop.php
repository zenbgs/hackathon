<a href="https://api.whatsapp.com/send?phone=6281219191967" class="float-wa" id="myBtnWa" target="_blank">
<i class="fa fa-whatsapp"></i>
</a>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-circle"></i></button>

<script>
var mybutton = document.getElementById("myBtn");
var myWa = document.getElementById("myBtnWa");
var no = 0;

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function fade(element,no) {
    if(no == 1){
        var op = 1;  // initial opacity
    var timer = setInterval(function () {
        if (op <= 0.1){
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op -= op * 0.1;
    }, 50);
    }
   
}

function unfade(element,no) {
    if(no == 1){
        var op = 0.1;  // initial opacity
    element.style.display = 'block';
    var timer = setInterval(function () {
        if (op >= 1){
            clearInterval(timer);
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op += op * 0.1;
    }, 10);
    }
    
}


function scrollFunction() {

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        unfade(mybutton,no++);
        myWa.style.bottom = "75px";
    } else {
        no = 0;
        fade(mybutton,no++);
        myWa.style.bottom = "20px";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>