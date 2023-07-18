import React, { Component } from 'react';

export default class About extends Component {
  constructor(){
    super()
    this.state = {
        color:"green"
    }
  }
  render() {
    return (
      <div> about color : {this.state.color} </div>
    );
  }
}
