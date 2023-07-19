import React, { Component } from 'react';

export default class Data extends Component {
    constructor(){
        super()
        this.state = {
            colors:['red','green','blue',"yellow"],
            users:["buthaina","hajar","fatma","maisa","amal","shaikha","khalil","alaina","shrooq","arwa","mohamed"]
        }
    }
  render() {
    let {users,colors} = this.state
    return (
        <>
            {/* <ul>
                {colors.map((c)=> <li>{c}</li> )}
            </ul>

            <ol>
                {users.map((u)=>  <li>{u}</li> )}
            </ol> */}
        </>
    );
  }
}
