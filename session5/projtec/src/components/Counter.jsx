import React, { useState } from 'react'

export default function Counter() {
    let [x,setX] = useState(0)
  return (
    <>
        <h1>count is : {x}</h1>
        <button onClick={increment}>increment</button>
    </>
  )
  function increment(){
    setX(++x)
  }
}
