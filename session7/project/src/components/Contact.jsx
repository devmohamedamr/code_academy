import axios from 'axios'
import React, { useEffect, useState } from 'react'

export default function Contact() {
    const [users,setUsers] = useState([])
    useEffect(()=>{
        getdata()
    },[])
  return (
    <>
        <ul>
            {users.map((u)=><li>{u.name}</li>)}
        </ul>
    </>
  )

  function getdata(){
    axios.get("https://jsonplaceholder.typicode.com/users").then((res)=>{
        setUsers(res.data)
        console.log(res.data)
    })
  }
}
