document.getElementById("state").onchange = function(){
    let state =  document.getElementById("state").value
    $.ajax({
        methods:"GET",
        url:`http://127.0.0.1:8000/api/city/${state}`,
        success:function(res){
            document.getElementById("city").innerHTML = res
        }
    })
}
