function select() {

    var select = document.getElementById('parallelogram');


    select.style.transform = "scale(1.5)";
    select.style.transition = "0.3s ease-in-out";

}



function deSelect() {

    var select = document.getElementById('parallelogram');

    select.style.transform = "scale(1) skew(10deg)";
    select.style.transition = "0.3s ease-in-out";

}