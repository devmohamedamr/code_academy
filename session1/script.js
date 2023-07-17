// let password = document.getElementById("password")
// document.getElementById("show").onclick = function(){
//     if(password.type === "password"){
//         document.getElementById("show").innerText = "hide"
//         password.type = "text"
//     }else{
//         document.getElementById("show").innerText = "show"
//         password.type = "password"
//     }
// }


// let text = document.getElementById("text")
// let res = document.getElementById("res")
// text.onkeyup = function(){
//     let count = text.value.length
//     if(count>=20){
//         text.style.cssText = "border:1px solid red;outline:1px solid red"
//     }else{
//         text.style.cssText = "border:1px solid black;outline:1px solid black"
//     }
//     res.innerText = count
// }

// document.getElementById("show").onclick = function () {
//     alert("test")
// }

$('#show').click(function(){
    if( $("#password").attr("type") === "password"){
        $('#show').text("hide")
        $("#password").attr("type","text")
    }else{
        $('#show').text("show")
        $("#password").attr("type","password")
    }
})