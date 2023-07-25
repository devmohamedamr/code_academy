import React, { useState } from 'react'
import axios from 'axios'
import {useForm} from 'react-hook-form'
export default function Github() {
    const {register,handleSubmit} = useForm()
    const [githubuser,setGithubuser] = useState([])
  return (
    <>
        <form className='form-group' onSubmit={handleSubmit(getAccount)}>
            <input type='text' {...register("username")} placeholder='enter your account' />
            <input type='submit' value='send' />
        </form>

        <img src={githubuser.avatar_url} />
        <h1>{githubuser.name}</h1>
        <h2>{githubuser.bio}</h2>
    </>
  )

  function getAccount(data){
    axios.get(`https://api.github.com/users/${data.username}`).then((resp)=>{
        console.log(resp.data)
        setGithubuser(resp.data)
    })
  }
}
