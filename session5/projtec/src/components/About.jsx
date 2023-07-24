import React, { useState } from 'react'
import User from './User'

export default function About() {
    const [card,setCard] = useState([jmncxv
        {title:"1",desc:"awdawd"},
        {title:"2",desc:"awdawd"},
        {title:"3",desc:"awdawd"}
    ])
  return (
    <>
        {card.map((u)=> <User title={u.title} desc={u.desc} />)}
    </>
  )
}
