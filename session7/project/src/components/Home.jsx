import React from 'react'
import axios from 'axios'
export default function Home() {
  return (
    <>
    </>
  )

  function getdata(){
    axios.get("https://jsonplaceholder.typicode.com/users").then((res)=>{
        console.log(res)
    })
  }
}
