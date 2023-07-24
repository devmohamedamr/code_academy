import React, { useState } from 'react'
import axios from 'axios'
export default function About() {
  const [data,setData] = useState([])
  return (
    <>
      <button onClick={users}>get users</button>
      <ul>
        {data.map((user)=> <li>{user.name}</li>)}
      </ul>
      
    </>
  )


  function users(){
    axios.get("https://jsonplaceholder.typicode.com/users").then((res)=>{
        console.log(res.data)
        setData(res.data)
    })
  }
}
