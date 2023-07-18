import React, { Component } from 'react';

export default class Navbar extends Component {
  constructor(){
    super();
    this.state = {
      name:"ahmed",
      age:20
    }
  }
  render() {
    return (
      <>
        <h1 id='color'>your name is : {this.state.name} </h1>
        <h2>your age is : {this.state.age}</h2>
      </>
    );
  }
}
