import React, { Component } from 'react';

export default class Slider extends Component {
    constructor(){
        super()
        this.state = {
            name:"oman slider"
        }
    }
  render() {
    return (
      <div className='container'> slider {this.state.name} </div>
    );
  }
}
