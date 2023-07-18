import React, { Component } from 'react';

export default class Home extends Component {
  constructor(){
    super()
    this.state = {
        email :"mohamed@mohamed.com"
    }
  }
  render() {
    return (
      <div className='container'> hi home  <h1> {this.state.email} </h1> </div>
    );
  }
}
