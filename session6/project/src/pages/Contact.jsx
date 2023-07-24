import React, { useState } from 'react'
import axios from 'axios'
export default function Contact() {
  const [img,setImg] = useState("")
  return (
    <>
      <button onClick={getuser}>click</button>
      <img src={img} />
    </>
  )

  function getuser(){
    axios.get("https://api.github.com/users/devmohamedamr").then((res)=>{
      setImg(res.data.avatar_url)
      console.log(res.data.avatar_url)
    })
  }
}
