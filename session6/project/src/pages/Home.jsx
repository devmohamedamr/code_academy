import React from 'react'
import axios from 'axios'
export default function Home() {
  return (
    <>
      <button onClick={data}>get data</button>
    </>
  )

  function data(){
    axios.get("https://jsonplaceholder.typicode.com/users").then((response)=>{
      console.log(response.data)
    })
  }
}
