// $("#click").click(()=>{
//     $(".box").slideUp(1000,()=>{
//         $(".box").show(1000,()=>{
//             $(".box").fadeOut(1000)
//         })
//     })
//     // $(".top").animate({width:"100%"},4000)
// })


// $("#stop").click(()=>{
//     $(".top").stop() 
// })


// $("#click").click(()=>{
//     $(".box").hide(1000,()=>{
//         $(".box").slideDown(1000,()=>{
//             $(".box").fadeOut(1000)
//         })
//     })
// })

// $("#click").click(()=>{
//     $(".box").hide(1000).slideDown(1000).fadeOut(1000)
// })


// $("#calc").click(()=>{
//     let x = $("#x").val("mohamed")
//     let y = $("#y").val("amr")
//     // $("#res").text("this result is :"+ x+y)
//     $("#res").text(`this result is : ${+x + +y}`)
// })


// $.get({
//     url:"https://jsonplaceholder.typicode.com/users",
//     success:function(res){
//         let text = ""
//         for(let i = 0;i<res.length;i++){
//             text += `<li>${res[i].name}</li>`
//         }
//         $("#list").html(text)
//     },
//     error:function(res){
//         console.log(res)
//     }
// })



// $.get({
//     url:"https://jsonplaceholder.typicode.com/users",
//     success:function(res){
//        let text =  res.map((user)=> `<li> ${user.name} </li>` )
//        $("#list").html(text)
//     }
// })



// $.get({
//     url:"https://jsonplaceholder.typicode.com/users",
//     success:function(res){
//         let text = ""
//         res.forEach((value,key)=>{
//             text += `<li>${value.name}</li>`
//         })
//         $("#list").html(text)
//     }
// })


// $.get({
//     url:"https://jsonplaceholder.typicode.com/users",
//     success:function(res){
//       let text=   res.map((x)=>`<li> ${x.name} </li>`)
//       $("#list").html(text)
//     }
// })



$("#click").click(()=>{
    let username = $("#username").val()
    let urlapi = "https://api.github.com/users/"+username
    $.get({
        url:urlapi,
        success:function(res){
            $("#img").attr("src",res.avatar_url)
            console.log(res.avatar_url)
        }
    })
})