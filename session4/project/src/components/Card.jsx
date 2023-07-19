import React, { Component } from 'react';

export default class Card extends Component {
  render() {
    let {name,age} = this.props
    return (
    <div> 
        <h1>your name is : {name}</h1>
        <h2>your age is  : {age}</h2>    
    </div>
    );
  }
}
