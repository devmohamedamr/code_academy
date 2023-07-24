import React from 'react'
import axios from 'axios'
export default function About() {
  return (
    <>
      <button onClick={users}>get users</button>
    </>
  )


  function users(){
    axios.get("https://jsonplaceholder.typicode.com/users").then((res)=>{
        console.log(res.data)
    })
  }
}
