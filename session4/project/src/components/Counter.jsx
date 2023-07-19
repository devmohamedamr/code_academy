import React, { Component } from 'react';

export default class Counter extends Component {
    constructor(){
        super()
        this.state = {
            count:0
        }
    }
  render() {
    return (
        <>
            <h1>count is : {this.state.count}</h1>
            <button onClick={this.increment}>increment</button>
            <button onClick={this.deincrement}>deincrement</button>
            <button onClick={this.reset}>reset</button>

        </>
    );
  }

  increment = ()=>{
    this.setState({'count':++this.state.count})
  }

  deincrement = ()=>{
    this.setState({'count':--this.state.count})
  }

  reset = ()=>{
    this.setState({'count':0})
  }
}
