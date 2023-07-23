import React from 'react'

export default function User(props) {
  return (
       <>
        <h1>your name is : {props.title}</h1>
        <h2>desc is : {props.desc}</h2>
       </>
  )
}
